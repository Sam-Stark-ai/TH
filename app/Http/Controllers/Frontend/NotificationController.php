<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\FcmToken;
use Google\Client;
use GuzzleHttp\Client as HttpClient;
use Exception;

class NotificationController extends Controller
{
    protected $projectId = 'tether-heart-c65f9';

    // Path to your downloaded service-account.json file
    protected $serviceAccountPath = 'firebase/service-account.json';

    public function sendNotification(Request $request)
    {
        Log::info('FCM Notification Request Received', [
            'request_data' => $request->all(),
            'authenticated_user_id' => optional($request->user())->id,
        ]);

        $request->validate([
            'receiver_user_id' => 'required|integer|exists:users,id',
            'title' => 'required|string',
            'body' => 'required|string',
        ]);

        $sender = $request->user();
        $receiverId = $request->receiver_user_id;

        Log::info("Fetching FCM tokens for receiver ID: {$receiverId}");

        $tokens = FcmToken::where('user_id', $receiverId)->pluck('token')->toArray();

        Log::info("Fetched FCM tokens", ['tokens' => $tokens]);

        if (empty($tokens)) {
            Log::warning("FCM Notification failed: No device tokens found for user {$receiverId}.");
            return response()->json(['message' => 'No device tokens found for receiver'], 404);
        }

        // Prepare data payload for notification
     // Prepare data payload for notification
$dataPayload = [
    'sender_user_id'   => (string) $sender->id,
    'sender_name'      => (string) ($sender->name ?? ''),
    'receiver_user_id' => (string) $receiverId,
];


        try {
            $client = new Client();
            $client->setAuthConfig(storage_path($this->serviceAccountPath));
            $client->addScope('https://www.googleapis.com/auth/firebase.messaging');

            $accessToken = $client->fetchAccessTokenWithAssertion()['access_token'];
            if (!$accessToken) {
                Log::error('Failed to get access token from Google API');
                return response()->json(['message' => 'Failed to authenticate with Firebase'], 500);
            }

            $httpClient = new HttpClient();
            $url = "https://fcm.googleapis.com/v1/projects/{$this->projectId}/messages:send";

            $results = [];
            foreach ($tokens as $token) {
                $message = [
                    'message' => [
                        'token' => $token,
                        'notification' => [
                            'title' => $request->title,
                            'body' => $request->body,
                        ],
                        'data' => $dataPayload,
                        'android' => [
                            'priority' => 'high',
                        ],
                    ],
                ];

                Log::info("Sending notification to token: {$token}", ['message' => $message]);

                $response = $httpClient->post($url, [
                    'headers' => [
                        'Authorization' => "Bearer {$accessToken}",
                        'Content-Type' => 'application/json',
                    ],
                    'json' => $message,
                ]);

                $body = json_decode($response->getBody(), true);
                Log::info('FCM response', ['token' => $token, 'response' => $body]);

                $results[] = [
                    'token' => $token,
                    'response' => $body,
                    'status' => $response->getStatusCode(),
                ];
            }

            return response()->json([
                'message' => 'Notifications sent',
                'results' => $results,
            ]);
        } catch (Exception $e) {
            Log::error('FCM Notification failed with exception', ['error' => $e->getMessage()]);
            return response()->json([
                'message' => 'Failed to send notification',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
