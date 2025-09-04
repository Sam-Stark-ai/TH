<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RingOrder;
use App\Models\User;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Support\Facades\Log;

class RingOrderController extends Controller
{
    public function __construct()
    {
        Stripe::setApiKey(config('services.stripe.secret'));
    }

    public function handlePayment(Request $request)
    {
        Log::info('Incoming ring payment request', ['request' => $request->all()]);
        Log::debug('Raw ring payment request', $request->all());
        
        // This controller ONLY handles ring orders
        // Gift orders should use the gift.checkout route and GiftOrderController
        
        // Validate ring order payload (using package_id, package_name, etc.)
        $validator = Validator::make($request->all(), [
                // Package details
                'package_id' => 'required|string',
                'package_name' => 'required|string|max:255',
                'package_price' => 'required|numeric|min:0',
                'rings_count' => 'required|integer|min:2',
                
                // Ring specifications
                'female_rings' => 'required|integer|min:0',
                'male_rings' => 'required|integer|min:0',
                'female_ring_size' => 'required|string|max:255',
                'male_ring_size' => 'required|string|max:255',

                // Buyer details
                'fullname' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:255',
                'partner_name' => 'required|string|max:255',
                'address' => 'required|string',

                // Gift details (optional)
                'is_gift' => 'nullable|boolean',
                'gift_details' => 'nullable|string', // JSON string

                // Payment details
            'payment_method' => 'required|string',
            'payment_intent_id' => 'nullable|string',
            'payment_method_id' => 'nullable|string',
            'paypal_order_id' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            Log::warning('Ring payment validation failed', ['errors' => $validator->errors()]);
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();
        
        Log::info('Processing as RING ORDER');
        // Handle ring order logic only
        return $this->handleRingOrder($data, $request);
    }



    private function handleRingOrder($data, $request)
    {
 

       

  
        $packagePrice = $data['package_price'];
        $totalPrice = $packagePrice;



        try {
            Log::info('Payment attempt', [
                'total_price' => $totalPrice,
                'payment_method' => $data['payment_method'],
                'user_email' => $data['email'],
                'payment_method_id' => $data['payment_method_id'] ?? null,
                'payment_intent_id' => $data['payment_intent_id'] ?? null,
                'paypal_order_id' => $data['paypal_order_id'] ?? null,
            ]);

            if ($data['payment_method'] === 'paypal' && !empty($data['paypal_order_id'])) {
                // PayPal: just record the PayPal order ID, assume payment is already captured on frontend
                Log::info('Processing PayPal payment', [
                    'paypal_order_id' => $data['paypal_order_id'],
                    'amount' => $totalPrice,
                ]);
                $intent = (object)[
                    'id' => $data['paypal_order_id'],
                    'status' => 'succeeded',
                ]; // Fake intent object for consistency
            } else if ($data['payment_method'] === 'google_pay' && !empty($data['payment_method_id'])) {

                Log::info('Processing Google Pay token', [
                    'token' => $data['payment_method_id'],
                    'amount' => intval($totalPrice * 100),
                ]);
                Log::debug('Google Pay PaymentIntent create params', [
                    'amount' => intval($totalPrice * 100),
                    'currency' => 'usd',
                    'payment_method_types' => ['card'],
                    'payment_method_data' => [
                        'type' => 'card',
                        'card' => [
                            'token' => $data['payment_method_id'],
                        ],
                    ],
                    'confirm' => true,
                ]);
                $intent = PaymentIntent::create([
                    'amount' => intval($totalPrice * 100),
                    'currency' => 'usd',
                    'payment_method_types' => ['card'],
                    'payment_method_data' => [
                        'type' => 'card',
                        'card' => [
                            'token' => $data['payment_method_id'],
                        ],
                    ],
                    'confirm' => true,
                ]);
                Log::info('Google Pay PaymentIntent created and confirmed', ['payment_intent_id' => $intent->id, 'status' => $intent->status]);
            } else if ($data['payment_method'] === 'google_apple_pay' && !empty($data['payment_method_id'])) {

                Log::info('Processing Apple Pay/Google Pay payment', [
                    'payment_method_id' => $data['payment_method_id'],
                    'amount' => intval($totalPrice * 100),
                ]);
                $intent = PaymentIntent::create([
                    'amount' => intval($totalPrice * 100),
                    'currency' => 'usd',
                    'payment_method' => $data['payment_method_id'],
                    'confirm' => true,
                    'automatic_payment_methods' => [
                        'enabled' => true,
                        'allow_redirects' => 'never'
                    ],
                ]);
                Log::info('Apple Pay/Google Pay PaymentIntent created and confirmed', ['payment_intent_id' => $intent->id, 'status' => $intent->status]);
            } else if (!empty($data['payment_intent_id'])) {

                Log::info('Confirming payment intent', ['payment_intent_id' => $data['payment_intent_id']]);
                Log::debug('PaymentIntent retrieve and confirm', ['payment_intent_id' => $data['payment_intent_id']]);
                $intent = PaymentIntent::retrieve($data['payment_intent_id']);
                $intent->confirm();
                Log::info('Payment intent confirmed', ['payment_intent_id' => $data['payment_intent_id'], 'status' => $intent->status]);
            } else if (!empty($data['payment_method_id'])) {

                Log::info('Creating new Stripe card payment intent', [
                    'amount' => intval($totalPrice * 100),
                    'currency' => 'usd',
                    'payment_method' => $data['payment_method_id'],
                ]);
                Log::debug('Stripe card PaymentIntent create params', [
                    'amount' => intval($totalPrice * 100),
                    'currency' => 'usd',
                    'payment_method' => $data['payment_method_id'],
                    'confirm' => true,
                    'automatic_payment_methods' => [
                        'enabled' => true,
                        'allow_redirects' => 'never'
                    ],
                ]);
                $intent = PaymentIntent::create([
                    'amount' => intval($totalPrice * 100), 
                    'currency' => 'usd',
                    'payment_method' => $data['payment_method_id'],
                    'confirm' => true,
                    'automatic_payment_methods' => [
                        'enabled' => true,
                        'allow_redirects' => 'never'
                    ],
                ]);
                Log::info('Stripe card PaymentIntent created and confirmed', ['payment_intent_id' => $intent->id, 'status' => $intent->status]);
            } else {
                Log::error('No valid payment method provided', [
                    'payment_method' => $data['payment_method'],
                    'payment_method_id' => $data['payment_method_id'] ?? null,
                    'payment_intent_id' => $data['payment_intent_id'] ?? null,
                    'paypal_order_id' => $data['paypal_order_id'] ?? null,
                ]);
                return response()->json([
                    'success' => false,
                    'message' => 'No valid payment method provided.',
                ], 422);
            }

            if (
                $intent->status === 'requires_action' &&
                $intent->next_action->type === 'use_stripe_sdk'
            ) {
                Log::info('Payment requires action', ['payment_intent_id' => $intent->id, 'next_action' => $intent->next_action]);
                Log::debug('Stripe requires action response', ['client_secret' => $intent->client_secret]);
                return response()->json([
                    'requires_action' => true,
                    'payment_intent_client_secret' => $intent->client_secret,
                ]);
            }

            if ($intent->status !== 'succeeded') {
                Log::warning('Payment not successful', ['payment_intent_id' => $intent->id, 'status' => $intent->status]);
                Log::debug('Stripe payment failed', ['intent' => $intent]);
                return response()->json([
                    'success' => false,
                    'message' => 'Payment not successful.',
                    'status' => $intent->status,
                ]);
            }

            $packageDetail = [
                'package_id' => $data['package_id'],
                'package_name' => $data['package_name'],
                'package_price' => $data['package_price'],
                'rings_count' => $data['rings_count'],
                'total_price' => $totalPrice
            ];

            $giftDetails = null;
            if (!empty($data['gift_details'])) {
                $giftDetails = is_string($data['gift_details']) ? json_decode($data['gift_details'], true) : $data['gift_details'];
            }

            $user = User::where('email', $data['email'])->first();
            if (!$user) {
                Log::info('User not found, creating new user', ['email' => $data['email']]);
                
                $randomPassword = str_pad(random_int(10000000, 99999999), 8, '0', STR_PAD_LEFT);
                
                $guestUsername = $this->generateGuestUsername();
                
                $user = User::create([
                    'name' => $data['fullname'],
                    'email' => $data['email'],
                    'username' => $guestUsername,
                    'password' => Hash::make($randomPassword),
                    'phone' => $data['phone'],
                     'connection_code' => User::generateUniqueConnectionCode(),
                    'address' => $data['address'],
                    'trial_days' => 30,
                    'trial_started' => now(),
                    'is_first' => 1,
                ]);
                
                Log::info('New user created', ['user_id' => $user->id, 'email' => $user->email, 'username' => $guestUsername]);
                
                try {
                    Mail::send('emails.welcome', [
                        'name' => $data['fullname'],
                        'email' => $data['email'],
                        'username' => $guestUsername,
                        'password' => $randomPassword,
                        'loginUrl' => route('login') 
                    ], function ($message) use ($data) {
                        $message->to($data['email'], $data['fullname'])
                                ->subject('Welcome to TetherHeart - Your Account Details');
                    });
                    
                    Log::info('Welcome email sent successfully', ['email' => $data['email']]);
                } catch (Exception $e) {
                    Log::error('Failed to send welcome email', [
                        'email' => $data['email'],
                        'error' => $e->getMessage()
                    ]);
                  
                }
            } else {
                Log::info('Existing user found', ['user_id' => $user->id, 'email' => $user->email]);
            }

        
            Log::info('Saving order to database', [
                'user_id' => $user->id,
                'package_detail' => $packageDetail,
                'fullname' => $data['fullname'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'partner_name' => $data['partner_name'],
                'address' => $data['address'],
                'female_rings' => $data['female_rings'],
                'male_rings' => $data['male_rings'],
                'female_ring_size' => $data['female_ring_size'],
                'male_ring_size' => $data['male_ring_size'],
                'price' => $totalPrice,
                'payment_method' => $data['payment_method'],
                'payment_id' => $intent->id,
                'is_gift' => $data['is_gift'] ?? false,
                'gift_details' => $giftDetails
            ]);
            Log::debug('Order data for DB', [
                'user_id' => $user->id,
                'package_detail' => $packageDetail,
                'fullname' => $data['fullname'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'partner_name' => $data['partner_name'],
                'address' => $data['address'],
                'female_rings' => $data['female_rings'],
                'male_rings' => $data['male_rings'],
                'female_ring_size' => $data['female_ring_size'],
                'male_ring_size' => $data['male_ring_size'],
                'price' => $totalPrice,
                'payment_method' => $data['payment_method'],
                'payment_id' => $intent->id,
                'is_gift' => $data['is_gift'] ?? false,
                'gift_details' => $giftDetails
            ]);
            $order = RingOrder::create([
                'user_id' => $user->id,
                'package_detail' => $packageDetail,
                'fullname' => $data['fullname'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'partner_name' => $data['partner_name'],
                'address' => $data['address'],
                'female_rings' => $data['female_rings'],
                'male_rings' => $data['male_rings'],
                'female_ring_size' => $data['female_ring_size'],
                'male_ring_size' => $data['male_ring_size'],
                'price' => $totalPrice,
                'payment_method' => $data['payment_method'],
                'payment_id' => $intent->id,
                'is_gift' => $data['is_gift'] ?? false,
                'gift_details' => $giftDetails
            ]);
            Log::info('Order created', ['order_id' => $order->id, 'payment_id' => $intent->id, 'order_data' => $order->toArray()]);

            Log::info('Returning success response', [
                'success' => true,
                'order_id' => $order->id,
                'message' => 'Payment and order created successfully.',
               
            ]);
            return response()->json([
                'success' => true,
                'order_id' => $order->id,
                'message' => 'Payment and order created successfully.',
               
            ]);

        } catch (Exception $e) {
            Log::error('Payment error', [
                'error' => $e->getMessage(),
                'data' => $data,
            ]);
            Log::debug('Stripe Exception', ['exception' => $e]);
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ], 422);
        }
    }

    private function generateGuestUsername()
    {
        do {
            $username = 'User' . random_int(1, 9999);
        } while (User::where('username', $username)->exists());
        
        return $username;
    }
}
