<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GiftOrder;
use App\Models\Gift;
use App\Models\SubscriptionPlan;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Facades\Log;

class GiftOrderController extends Controller
{
    public function __construct()
    {
        Stripe::setApiKey(config('services.stripe.secret'));
    }

    public function handlePayment(Request $request)
    {
        Log::info('Incoming gift payment request', ['request' => $request->all()]);
        Log::debug('Raw gift payment request', $request->all());
        
        // This controller ONLY handles gift orders from preheader
        // Ring orders should use the ring.checkout route and RingOrderController
        
        // Check if this is actually a gift order
        if (!$this->isGiftOrder($request)) {
            Log::warning('Non-gift order sent to gift controller', [
                'route' => $request->route()->getName(),
                'url' => $request->url(),
                'fields' => array_keys($request->all())
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'This endpoint is for gift orders only. Ring orders should use the ring.checkout route.',
            ], 400);
        }
        
        Log::info('Processing as GIFT ORDER');
        return $this->handleGiftOrderFromPreheader($request);
    }

    private function isGiftOrder(Request $request)
    {
        // Check if this is a gift order from preheader by looking for gift-specific fields
        // Gift orders have these specific field names that ring orders don't have
        $hasGiftSpecificFields = $request->has('recipientName') || 
                                $request->has('recipientEmail') || 
                                $request->has('deliveryDate') ||
                                $request->has('senderName') ||
                                $request->has('senderEmail') ||
                                $request->has('message') ||
                                $request->has('billingAddress');
        
        // Ring orders have these specific field names that gift orders don't have
        $hasRingSpecificFields = $request->has('package_id') || 
                                $request->has('package_name') || 
                                $request->has('package_price') ||
                                $request->has('rings_count') ||
                                $request->has('subscription_plan_id') ||
                                $request->has('subscription_detail') ||
                                $request->has('female_rings') ||
                                $request->has('male_rings') ||
                                $request->has('female_ring_size') ||
                                $request->has('male_ring_size') ||
                                $request->has('partner_name');
        
        // If it has ring-specific fields, it's definitely a ring order
        if ($hasRingSpecificFields) {
            return false;
        }
        
        // If it has gift-specific fields, it's a gift order
        if ($hasGiftSpecificFields) {
            return true;
        }
        
        // Default to ring order if unclear
        return false;
    }

    private function handleGiftOrderFromPreheader(Request $request)
    {
        Log::info('Processing gift order from preheader', $request->all());
        
        // Validate gift order fields
        $validator = Validator::make($request->all(), [
            'gift_id' => 'required|exists:gifts,id',
            'price' => 'required|numeric|min:0',
            'payment_method' => 'required|string',
            
            // Recipient details
            'recipientName' => 'required|string|max:255',
            'recipientEmail' => 'required|email|max:255',
            'recipientPhone' => 'nullable|string|max:255',
            'deliveryDate' => 'required|date',
            
            // Sender details
            'senderName' => 'required|string|max:255',
            'senderEmail' => 'required|email|max:255',
            
            // Additional details
            'message' => 'nullable|string',
            'billingAddress' => 'required|string',
            
            // Payment details
            'payment_method_id' => 'nullable|string',
            'paypal_order_id' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            Log::warning('Gift order validation failed', ['errors' => $validator->errors()]);
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();
        
        try {
            $paymentIntent = null;
            $paymentId = null;

            // Get the gift details
            $gift = Gift::find($data['gift_id']);
            if (!$gift) {
                return response()->json([
                    'success' => false,
                    'message' => 'Selected gift package not found.',
                ], 404);
            }

            // Handle different payment methods
            if ($data['payment_method'] === 'paypal' && !empty($data['paypal_order_id'])) {
                $paymentId = $data['paypal_order_id'];
            } elseif ($data['payment_method'] === 'google_pay' && !empty($data['payment_method_id'])) {
                $paymentIntent = PaymentIntent::create([
                    'amount' => intval($data['price'] * 100),
                    'currency' => 'usd',
                    'payment_method_types' => ['card'],
                    'payment_method_data' => [
                        'type' => 'card',
                        'card' => ['token' => $data['payment_method_id']],
                    ],
                    'confirm' => true,
                ]);
                $paymentId = $paymentIntent->id;
            } elseif ($data['payment_method'] === 'google_apple_pay' && !empty($data['payment_method_id'])) {
                $paymentIntent = PaymentIntent::create([
                    'amount' => intval($data['price'] * 100),
                    'currency' => 'usd',
                    'payment_method' => $data['payment_method_id'],
                    'confirm' => true,
                    'automatic_payment_methods' => ['enabled' => true, 'allow_redirects' => 'never'],
                ]);
                $paymentId = $paymentIntent->id;
            } elseif (!empty($data['payment_method_id'])) {
                $paymentIntent = PaymentIntent::create([
                    'amount' => intval($data['price'] * 100),
                    'currency' => 'usd',
                    'payment_method' => $data['payment_method_id'],
                    'confirm' => true,
                    'automatic_payment_methods' => ['enabled' => true, 'allow_redirects' => 'never'],
                ]);
                $paymentId = $paymentIntent->id;
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'No valid payment method provided.',
                ], 422);
            }

            // Check if payment requires action (3D Secure)
            if ($paymentIntent && $paymentIntent->status === 'requires_action' &&
                $paymentIntent->next_action->type === 'use_stripe_sdk') {
                return response()->json([
                    'requires_action' => true,
                    'payment_intent_client_secret' => $paymentIntent->client_secret,
                ]);
            }

            // Check payment status
            if ($paymentIntent && $paymentIntent->status !== 'succeeded') {
                return response()->json([
                    'success' => false,
                    'message' => 'Payment not successful.',
                    'status' => $paymentIntent->status,
                ]);
            }

            // Prepare gift detail array to store in package_detail column
            $giftDetail = [
                'gift_id' => $gift->id,
                'title' => $gift->title,
                'icon' => $gift->icon,
                'rings_count' => $gift->rings_count,
                'description' => $gift->description,
                'includes' => $gift->includes,
                'package_price' => $data['price'],
                'total_price' => $data['price']
            ];

            // Create the gift order
            $order = GiftOrder::create([
                'package_detail' => $giftDetail,
                'fullname' => $data['senderName'],
                'email' => $data['senderEmail'],
                'phone' => $data['recipientPhone'] ?? null,
                'partner_name' => $data['recipientName'],
                'address' => $data['billingAddress'],
                'female_rings' => 0, // Not applicable for gift orders
                'male_rings' => 0,   // Not applicable for gift orders
                'female_ring_size' => null, // Not applicable for gift orders
                'male_ring_size' => null,   // Not applicable for gift orders
                'subscription_plan' => null, // Not applicable for gift orders
                'subscription_detail' => null, // Not applicable for gift orders
                'price' => $data['price'],
                'payment_method' => $data['payment_method'],
                'payment_id' => $paymentId
            ]);

            Log::info('Gift order created successfully', [
                'order_id' => $order->id,
                'package_detail' => $giftDetail,
                'total_price' => $data['price']
            ]);

            return response()->json([
                'success' => true,
                'order_id' => $order->id,
                'message' => 'Gift order created successfully!',
                'package_detail' => $giftDetail,
                'total_price' => $data['price'],
                'order' => $order
            ]);

        } catch (Exception $e) {
            Log::error('Gift order payment error', [
                'error' => $e->getMessage(),
                'data' => $data,
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Payment processing failed: ' . $e->getMessage(),
            ], 500);
        }
    }
}
