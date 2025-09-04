<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontend\EventCalendarController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\UserRelationshipController;
use App\Http\Controllers\Frontend\NotificationController;
use App\Http\Controllers\Frontend\RingApiController;
use App\Http\Controllers\Frontend\RingOrderController;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\Auth\AuthController;
use App\Events\BpmBroadcasted;
use App\Models\BpmHistory;
use Illuminate\Support\Facades\Cache;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::get('/gifts', [RingApiController::class, 'gift']);
Route::get('/rings', [RingApiController::class, 'ring']);
Route::post('/ring-orders', [RingOrderController::class, 'handlePayment']);

Route::get('/faqs', [FaqController::class, 'index']);

Route::middleware('auth:sanctum')->post('/bpm-shoot', function (Request $request) {
    $request->validate([
        'bpm' => 'required|numeric',
        'ekg' => 'array',
    ]);

    $user = $request->user();

    $bpmHistory = BpmHistory::firstOrCreate(
        ['user_id' => $user->id],
        ['bpm_history' => [], 'ekg_history' => []]
    );

    $today = now()->toDateString();
$currentHour = now()->format('H'); // just hour for uniqueness

$index = collect($bpmData)->search(fn($entry) => isset($entry['date']) && $entry['date'] === $today);

if ($index !== false) {
    // Remove any existing point for this hour to avoid duplicates
    $bpmData[$index]['bpm_points'] = collect($bpmData[$index]['bpm_points'])
        ->reject(fn($p) => substr($p['time'], 0, 2) === $currentHour)
        ->values()
        ->all();

    $ekgData[$index]['ekg_points'] = collect($ekgData[$index]['ekg_points'])
        ->reject(fn($p) => substr($p['time'], 0, 2) === $currentHour)
        ->values()
        ->all();

    // Add the new reading
    $bpmData[$index]['bpm_points'][] = ['time' => now()->format('H:i'), 'bpm' => (int)$this->bpm];
    $ekgData[$index]['ekg_points'][] = ['time' => now()->format('H:i'), 'ekg' => $this->ekg];
} else {
    // New daily entry
    $bpmData[] = [
        'date' => $today,
        'bpm_points' => [['time' => now()->format('H:i'), 'bpm' => (int)$this->bpm]]
    ];
    $ekgData[] = [
        'date' => $today,
        'ekg_points' => [['time' => now()->format('H:i'), 'ekg' => $this->ekg]]
    ];
}

// Keep only last 30 days
$bpmHistory->bpm_history = array_slice($bpmData, -30);
$bpmHistory->ekg_history = array_slice($ekgData, -30);
$bpmHistory->save();


    event(new BpmBroadcasted($user->id, $request->bpm, now()->toDateTimeString(), $request->ekg ?? []));

    return response()->json([
        'status' => 'broadcasted',
        'bpm_history' => $bpmHistory->bpm_history,
        'ekg_history' => $bpmHistory->ekg_history,
    ]);
});

// BPM History Endpoint
Route::middleware('auth:sanctum')->get('/bpm/history', function (Request $request) {
    $user = $request->user();
    $bpmHistory = BpmHistory::where('user_id', $user->id)->first();

    return response()->json([
        'user_id' => $user->id,
        'bpm_history' => $bpmHistory->bpm_history ?? [],
        'ekg_history' => $bpmHistory->ekg_history ?? [],
    ]);
});

// Partner BPM + EKG history with optional query parameters
Route::middleware('auth:sanctum')->get('/bpm-partners', [UserRelationshipController::class, 'getBpmWithPartners']);

// Save FCM token
Route::middleware('auth:sanctum')->post('/save-fcm-token', function (Request $request) {
    $request->validate(['token' => 'required|string']);
    $user = $request->user();

    \App\Models\FcmToken::updateOrCreate(
        ['user_id' => $user->id],
        ['token' => $request->token]
    );

    return response()->json(['message' => 'Token saved']);
});

// Authenticated routes
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', fn(Request $request) => $request->user());
    Route::post('/profile/update', [AuthController::class, 'editProfile']);
    Route::get('/profile', [AuthController::class, 'getProfile']);
    Route::post('/notify', [NotificationController::class, 'sendNotification']);

    // Event routes
    Route::get('/events', [EventCalendarController::class, 'index']);
    Route::post('/events', [EventCalendarController::class, 'store']);
    Route::get('/events/{id}', [EventCalendarController::class, 'show']);
    Route::put('/events/{id}', [EventCalendarController::class, 'update']);
    Route::delete('/events/{id}', [EventCalendarController::class, 'destroy']);

    // Relationship routes
    Route::get('/relationships', [UserRelationshipController::class, 'index']);
    Route::post('/relationships', [UserRelationshipController::class, 'store']);
    Route::delete('/relationships/{id}', [UserRelationshipController::class, 'destroy']);
    Route::get('/relationship-types', [UserRelationshipController::class, 'getAllRelationshipTypes']);

     Route::get('subscription/check', [LoginController::class, 'check']);

    // Latest BPM cache
    Route::post('/bpm', function (Request $request) {
        $request->validate(['bpm' => 'required|numeric', 'ekg' => 'array']);
        $user = $request->user();

        $bpmData = [
            'user_id' => $user->id,
            'bpm' => $request->bpm,
            'time' => now()->toDateTimeString(),
            'ekg' => $request->ekg ?? [],
        ];

        event(new BpmBroadcasted($user->id, $request->bpm, now()->toDateTimeString(), $request->ekg ?? []));
        Cache::put("latest_bpm_user_{$user->id}", $bpmData, now()->addMinutes(10));

        return response()->json(['status' => 'broadcasted']);
    });

    Route::get('/bpm/latest', function (Request $request) {
        $user = $request->user();
        $latestBpm = Cache::get("latest_bpm_user_{$user->id}", [
            'user_id' => $user->id,
            'bpm' => null,
            'time' => null,
            'ekg' => [],
        ]);
        return response()->json($latestBpm);
    });
});

// Auth API routes
Route::post('/register', [RegisterController::class, 'registerAttempt']);
Route::post('/login', [LoginController::class, 'loginAttempt']);

Route::post('/password/send-otp', [AuthController::class, 'sendOtp']);
Route::post('/password/verify-otp', [AuthController::class, 'verifyOtp']);
Route::post('/password/reset', [AuthController::class, 'resetPasswordWithOtp']);

// Catch-all OPTIONS
Route::options('{any}', fn() => response()->json(['status' => 'OK'], 200))->where('any', '.*');
