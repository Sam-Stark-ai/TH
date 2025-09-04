
<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminTetherWorkController;
use App\Http\Controllers\Admin\AdminWellnessController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminNewsletterController;
use App\Http\Controllers\Admin\AdminNewsbarController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminWebsiteController;
use App\Http\Controllers\Admin\AdminRingController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminNewsletterSubmissionController;
use App\Http\Controllers\Admin\AdminContactPageController;
use App\Http\Controllers\Admin\AdminSubscriptionPlanController;
use App\Http\Controllers\Admin\AdminGiftController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Common\DashboardController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\FeatureController;
use App\Http\Controllers\Frontend\PricingController;
use App\Http\Controllers\Frontend\ContactController;
use Illuminate\Http\Request;
use App\Http\Controllers\PusherController;
use App\Events\BpmBroadcasted;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Broadcast;

use Pusher\Pusher;

// Simple test route for broadcasting (no auth required)
Route::get('/test-broadcast-simple', function () {
    try {
        // Test with a simple public channel first
        broadcast(new \App\Events\BpmBroadcasted(60, 72, now()->toDateTimeString()));
        
        return 'Simple broadcast test completed. Check logs and Pusher dashboard.';
    } catch (\Exception $e) {
        return 'Broadcasting error: ' . $e->getMessage() . '<br>File: ' . $e->getFile() . '<br>Line: ' . $e->getLine();
    }
});

Route::get('/test-bpm-event', function () {
    $userId = auth()->id() ?? 60; // fallback if not logged in

    // Check broadcasting configuration
    $broadcastDriver = config('broadcasting.default');
    $pusherConfig = config('broadcasting.connections.pusher');
    
    $debugInfo = [
        'Broadcast Driver' => $broadcastDriver,
        'Pusher Config' => $pusherConfig,
        'User ID' => $userId,
        'Channel Name' => 'bpm-channel.' . $userId,
        'Event Class' => 'App\Events\BpmBroadcasted'
    ];
    
    // Try to dispatch the event with error handling
    try {
        // Test broadcasting directly
        $event = new \App\Events\BpmBroadcasted($userId, 72, now()->toDateTimeString(), [0.5, 0.55, 0.58, 0.55, 0.45, 0.6, 0.9, 0.6, 0.3, 0.45, 0.65, 0.7, 0.65, 0.55, 0.58, 0.55, 0.45, 0.6, 0.9, 0.6, 0.3, 0.45, 0.65, 0.7, 0.65, 0.55, 0.58, 0.55, 0.45, 0.6, 0.9, 0.6, 0.3, 0.45, 0.65, 0.7, 0.65, 0.55, 0.58, 0.55, 0.45, 0.6, 0.9, 0.6, 0.3, 0.45, 0.65, 0.7, 0.65, 0.55]);
        
        // Try to broadcast manually to see any errors
        try {
            \Log::info('About to broadcast event', [
                'event_class' => get_class($event),
                'channel' => 'bpm-channel.' . $userId
            ]);
            
            // Test Pusher connection directly
            try {
                $pusher = new \Pusher\Pusher(
                    '71fd0af85fd81b611ae7',
                    '17f1a42a3fc7640bcf1f',
                    '2039036',
                    ['cluster' => 'ap2', 'useTLS' => true]
                );
                
                $pusherResult = $pusher->trigger('bpm-channel.' . $userId, 'bpm-updated', [
                    'user_id' => $userId,
                    'bpm' => 72,
                    'time' => now()->toDateTimeString(),
                    'ekg' => [0.5, 0.55, 0.58, 0.55, 0.45, 0.6, 0.9, 0.6, 0.3, 0.45, 0.65, 0.7, 0.65, 0.55, 0.58, 0.55, 0.45, 0.6, 0.9, 0.6, 0.3, 0.45, 0.65, 0.7, 0.65, 0.55, 0.58, 0.55, 0.45, 0.6, 0.9, 0.6, 0.3, 0.45, 0.65, 0.7, 0.65, 0.55, 0.58, 0.55, 0.45, 0.6, 0.9, 0.6, 0.3, 0.45, 0.65, 0.7, 0.65, 0.55]
                ]);
                
                \Log::info('Pusher direct trigger result', [
                    'result' => $pusherResult,
                    'channel' => 'bpm-channel.' . $userId
                ]);
                
                $debugInfo['Pusher Direct Test'] = '✅ Pusher direct trigger successful: ' . json_encode($pusherResult);
            } catch (\Exception $pusherError) {
                \Log::error('Pusher direct trigger failed', [
                    'error' => $pusherError->getMessage(),
                    'file' => $pusherError->getFile(),
                    'line' => $pusherError->getLine()
                ]);
                
                $debugInfo['Pusher Direct Test'] = '❌ Pusher direct trigger failed: ' . $pusherError->getMessage();
            }
            
            broadcast($event);
            
            \Log::info('Event broadcasted successfully', [
                'event_class' => get_class($event),
                'channel' => 'bpm-channel.' . $userId
            ]);
            
            $debugInfo['Broadcast Status'] = '✅ Event broadcasted successfully';
        } catch (\Exception $broadcastError) {
            \Log::error('Broadcasting failed', [
                'error' => $broadcastError->getMessage(),
                'file' => $broadcastError->getFile(),
                'line' => $broadcastError->getLine()
            ]);
            
            $debugInfo['Broadcast Status'] = '❌ Broadcasting failed: ' . $broadcastError->getMessage();
            $debugInfo['Broadcast Error Details'] = [
                'file' => $broadcastError->getFile(),
                'line' => $broadcastError->getLine(),
                'trace' => $broadcastError->getTraceAsString()
            ];
        }
        
        $debugInfo['Event Status'] = '✅ Event created successfully';
        $debugInfo['Test Data'] = [
            'BPM' => 72,
            'EKG Data Points' => 50,
            'Sample EKG Values' => [0.5, 0.55, 0.58, 0.55, 0.45, 0.6, 0.9, 0.6, 0.3, 0.45]
        ];
    } catch (\Exception $e) {
        $debugInfo['Event Status'] = '❌ Event creation failed: ' . $e->getMessage();
    }
    
    // Return debug information
    $html = '<h1>🔍 BPM + EKG Broadcasting Test</h1>';
    $html .= '<table border="1" cellpadding="10" style="font-family: monospace;">';
    
    foreach ($debugInfo as $key => $value) {
        if (is_array($value)) {
            $value = '<pre>' . print_r($value, true) . '</pre>';
        }
        $html .= "<tr><td><strong>$key</strong></td><td>$value</td></tr>";
    }
    
    $html .= '</table>';
    $html .= '<br><p><strong>Check your browser console for Pusher logs and EKG chart!</strong></p>';
    $html .= '<p><a href="/">← Back to Home</a></p>';
    
    return $html;
});

// routes/web.php
// routes/web.php
// Remove this custom route - Laravel handles broadcasting auth automatically
// Route::post('/broadcasting/auth', function (Request $request) {
//     if (! auth()->check()) {
//         abort(403);
//     }

//     $socketId = $request->socket_id;
//     $channelName = $request->channel_name;

//     if (! $socketId || ! $channelName) {
//         \Log::error('Missing socket_id or channel_name in broadcasting auth request', [
//             'socket_id' => $socketId,
//             'channel_name' => $channelName,
//             'user_id' => auth()->id(),
//         ]);
//         abort(400, 'Missing socket_id or channel_name');
//     }
//   $pusher = new Pusher(
//         '71fd0af85fd81b611ae7', // APP_KEY
//         '17f1a42a3fc7640bcf1f', // APP_SECRET
//         '2039036',              // APP_ID
//         [
//             'cluster' => 'ap2',
//             'useTLS' => true,
//         ]
//     );

//     $auth = $pusher->socketAuth($channelName, $socketId);

//     return response($auth);
// })->middleware('auth');



    
Route::get('/debug-urls', function() {
    $info = [
        'APP_URL from env()' => env('APP_URL'),
        'APP_URL from config()' => config('app.url'),
        'Current URL' => request()->url(),
        'Base URL' => url('/'),
        'Asset URL Test' => asset('FrontendAssets/css/bootstrap.min.css'),
        'URL Helper Test' => url('FrontendAssets/css/bootstrap.min.css'),
        'Environment' => config('app.env'),
        'Debug Mode' => config('app.debug') ? 'ON' : 'OFF',
        'Server Name' => $_SERVER['SERVER_NAME'] ?? 'Unknown',
        'HTTP Host' => $_SERVER['HTTP_HOST'] ?? 'Unknown',
    ];
    
    $html = '<h1>🔍 URL Debug Information</h1>';
    $html .= '<table border="1" cellpadding="10" style="font-family: monospace;">';
    
    foreach ($info as $key => $value) {
        $color = (strpos($value, 'localhost') !== false) ? 'style="background: #ffcccc;"' : '';
        $html .= "<tr $color><td><strong>$key</strong></td><td>$value</td></tr>";
    }
    
    $html .= '</table>';
    $html .= '<br><p><strong>Red rows indicate localhost URLs that need fixing!</strong></p>';
    $html .= '<p><a href="/">← Back to Home</a></p>';
    
    return $html;
});

// Force Clear Everything Route
Route::get('/force-clear-all', function() {
    try {
        // Clear all Laravel caches
        \Illuminate\Support\Facades\Artisan::call('cache:clear');
        \Illuminate\Support\Facades\Artisan::call('config:clear');
        \Illuminate\Support\Facades\Artisan::call('view:clear');
        \Illuminate\Support\Facades\Artisan::call('route:clear');
        
        // Clear compiled files
        \Illuminate\Support\Facades\Artisan::call('clear-compiled');
        
        // Recache config
        \Illuminate\Support\Facades\Artisan::call('config:cache');
        
        // Clear OPcache if available
        if (function_exists('opcache_reset')) {
            opcache_reset();
        }
        
        return '<h1>✅ Everything Cleared!</h1><br>' .
               '<p>Now check your environment:</p>' .
               '<p><a href="/debug-urls">Debug URLs</a></p>' .
               '<p><a href="/">Go to Home Page</a></p>';
               
    } catch (Exception $e) {
        return '<h1>❌ Error</h1><p>' . $e->getMessage() . '</p>';
    }
});


Route::group(['middleware' => ['guest']], function () {

    //User Login Authentication Routes
    Route::get('admin/login', [LoginController::class, 'login'])->name('login');
    Route::post('login-attempt', [LoginController::class, 'loginAttempt'])->name('login.attempt');

    //User Register Authentication Routes
    Route::get('register', [RegisterController::class, 'register'])->name('register');
    Route::post('registration-attempt', [RegisterController::class, 'registerAttempt'])->name('register.attempt');
Route::get('reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');



});
// Gift checkout/payment route for Stripe/Google/Apple Pay
Route::post('/gift/checkout', [\App\Http\Controllers\Frontend\GiftOrderController::class, 'handlePayment'])->name('gift.checkout');
Route::post('/ring/checkout', [\App\Http\Controllers\Frontend\RingOrderController::class, 'handlePayment'])->name('ring.checkout');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pricing-plan', [PricingController::class, 'index'])->name('pricing');
Route::post('/subscribe', [HomeController::class, 'subscribe'])->name('newsletter.subscribe');
Route::get('/feature', [FeatureController::class, 'index'])->name('feature');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'detail'])->name('blog.detail');
Route::post('/blog/comment', [BlogController::class, 'commentStore'])->name('comment.store');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');


Route::group(['middleware' => ['auth']], function () {
    Route::get('login-verification', [AuthController::class, 'login_verification'])->name('login.verification');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('verify-account', [AuthController::class, 'verify_account'])->name('verify.account');
    Route::post('resend-code', [AuthController::class, 'resend_code'])->name('resend.code');


    Route::get('email/verify/{id}/{hash}', [AuthController::class, 'verification_verify'])->middleware(['signed'])->name('verification.verify');
    Route::get('email/verify', [AuthController::class, 'verification_notice'])->name('verification.notice');
    Route::post('email/verification-notification', [AuthController::class, 'verification_send'])->middleware(['throttle:2,1'])->name('verification.send');

});


Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    // FAQ Routes
    Route::get('faq', [AdminFaqController::class, 'index'])->name('faq.index');
    Route::get('faq/add', [AdminFaqController::class, 'add'])->name('faq.add');
    Route::post('faq/store', [AdminFaqController::class, 'store'])->name('faq.store');
    Route::get('faq/{id}/edit', [AdminFaqController::class, 'edit'])->name('faq.edit');
    Route::put('faq/{id}', [AdminFaqController::class, 'update'])->name('faq.update');
    Route::delete('faq/{id}', [AdminFaqController::class, 'destroy'])->name('faq.destroy');
    Route::post('faq/{id}/toggle-visibility', [AdminFaqController::class, 'toggleVisibility'])->name('faq.toggleVisibility');

    // Gift Routes
    Route::get('gift', [AdminGiftController::class, 'index'])->name('gift.index');
    Route::get('gift/add', [AdminGiftController::class, 'add'])->name('gift.add');
    Route::post('gift/store', [AdminGiftController::class, 'store'])->name('gift.store');
    Route::get('gift/{id}/edit', [AdminGiftController::class, 'edit'])->name('gift.edit');
    Route::put('gift/{id}', [AdminGiftController::class, 'update'])->name('gift.update');
    Route::delete('gift/{id}', [AdminGiftController::class, 'destroy'])->name('gift.destroy');


        // Gift Routes
    Route::get('ring', [AdminRingController::class, 'index'])->name('ring.index');
    Route::get('ring/add', [AdminRingController::class, 'add'])->name('ring.add');
    Route::post('ring/store', [AdminRingController::class, 'store'])->name('ring.store');
    Route::get('ring/{id}/edit', [AdminRingController::class, 'edit'])->name('ring.edit');
    Route::put('ring/{id}', [AdminRingController::class, 'update'])->name('ring.update');
    Route::delete('ring/{id}', [AdminRingController::class, 'destroy'])->name('ring.destroy');

    // Blog Routes
    Route::get('blog', [AdminBlogController::class, 'index'])->name('blog.index');
    Route::get('blog/add', [AdminBlogController::class, 'add'])->name('blog.add');
    Route::post('blog/store', [AdminBlogController::class, 'store'])->name('blog.store');
    Route::get('blog/{id}/edit', [AdminBlogController::class, 'edit'])->name('blog.edit');
    Route::put('blog/{id}', [AdminBlogController::class, 'update'])->name('blog.update');
    Route::delete('blog/{id}', [AdminBlogController::class, 'destroy'])->name('blog.destroy');
    Route::post('blog/{id}/toggle-visibility', [AdminBlogController::class, 'toggleVisibility'])->name('blog.toggleVisibility');

    // Tether Work Routes
    Route::get('tether-work', [AdminTetherWorkController::class, 'index'])->name('tether-work.index');
    Route::get('tether-work/add', [AdminTetherWorkController::class, 'add'])->name('tether-work.add');
    Route::post('tether-work/store', [AdminTetherWorkController::class, 'store'])->name('tether-work.store');
    Route::get('tether-work/{id}/edit', [AdminTetherWorkController::class, 'edit'])->name('tether-work.edit');
    Route::put('tether-work/{id}', [AdminTetherWorkController::class, 'update'])->name('tether-work.update');
    Route::delete('tether-work/{id}', [AdminTetherWorkController::class, 'destroy'])->name('tether-work.destroy');

    // Wellness Routes
    Route::get('wellness', [AdminWellnessController::class, 'index'])->name('wellness.index');
    Route::get('wellness/add', [AdminWellnessController::class, 'add'])->name('wellness.add');
    Route::post('wellness/store', [AdminWellnessController::class, 'store'])->name('wellness.store');
    Route::get('wellness/{id}/edit', [AdminWellnessController::class, 'edit'])->name('wellness.edit');
    Route::put('wellness/{id}', [AdminWellnessController::class, 'update'])->name('wellness.update');
    Route::delete('wellness/{id}', [AdminWellnessController::class, 'destroy'])->name('wellness.destroy');
    Route::post('wellness/{id}/toggle-visibility', [AdminWellnessController::class, 'toggleVisibility'])->name('wellness.toggleVisibility');


        Route::get('subplan', [AdminSubscriptionPlanController::class, 'index'])->name('subplan.index');
    Route::get('subplan/add', [AdminSubscriptionPlanController::class, 'add'])->name('subplan.add');
    Route::post('subplan/store', [AdminSubscriptionPlanController::class, 'store'])->name('subplan.store');
    Route::get('subplan/{id}/edit', [AdminSubscriptionPlanController::class, 'edit'])->name('subplan.edit');
    Route::put('subplan/{id}', [AdminSubscriptionPlanController::class, 'update'])->name('subplan.update');
    Route::delete('subplan/{id}', [AdminSubscriptionPlanController::class, 'destroy'])->name('subplan.destroy');


    // About Section Routes

        Route::get('newsbar', [AdminNewsbarController::class, 'index'])->name('newsbar.index');
    Route::get('newsbar/add', [AdminNewsbarController::class, 'add'])->name('newsbar.add');
    Route::post('newsbar/store', [AdminNewsbarController::class, 'store'])->name('newsbar.store');
    Route::get('newsbar/{id}/edit', [AdminNewsbarController::class, 'edit'])->name('newsbar.edit');
    Route::put('newsbar/{id}', [AdminNewsbarController::class, 'update'])->name('newsbar.update');
    Route::delete('newsbar/{id}', [AdminNewsbarController::class, 'destroy'])->name('newsbar.destroy');

    // Newsletter Routes
    Route::get('newsletter', [AdminNewsletterController::class, 'index'])->name('newsletter.index');
    Route::get('newsletter/add', [AdminNewsletterController::class, 'add'])->name('newsletter.add');
    Route::post('newsletter/store', [AdminNewsletterController::class, 'store'])->name('newsletter.store');
    Route::get('newsletter/{id}/edit', [AdminNewsletterController::class, 'edit'])->name('newsletter.edit');
    Route::put('newsletter/{id}', [AdminNewsletterController::class, 'update'])->name('newsletter.update');
    Route::delete('newsletter/{id}', [AdminNewsletterController::class, 'destroy'])->name('newsletter.destroy');
    Route::post('newsletter/{id}/toggle-visibility', [AdminNewsletterController::class, 'toggleVisibility'])->name('newsletter.toggleVisibility');

    // Company Settings
    Route::get('company-settings', [AdminSettingController::class, 'index'])->name('company.settings');

    // Website CMS sections
    Route::get('website', [AdminWebsiteController::class, 'index'])->name('website.index');
    Route::get('contact', [AdminContactPageController::class, 'index'])->name('contact.index');
    Route::get('about', [AdminAboutController::class, 'index'])->name('about.index');
    Route::put('website/sections/update', [AdminWebsiteController::class, 'updateAllSections'])->name('website.sections.update');
    Route::put('contact/sections/update', [AdminContactPageController::class, 'updateContact'])->name('contact.update');
    Route::put('about/update', [AdminAboutController::class, 'update'])->name('about.update');

    Route::get('contacts', [AdminContactPageController::class, 'index'])->name('contactsubmission.index');
    Route::get('contactlist', [AdminContactController::class, 'index'])->name('contactlist');
    Route::get('newsletterlist', [AdminNewsletterSubmissionController::class, 'index'])->name('newsletterlist');
    Route::delete('newsletterlist/{id}', [AdminNewsletterSubmissionController::class, 'destroy'])->name('newsletterlist.destroy');
Route::delete('contacts/{id}', [AdminContactController::class, 'destroy'])->name('contact.destroy');


    Route::get('orders/gift', [AdminOrderController::class, 'giftIndex'])->name('gift.orders');
    Route::delete('orders/gift/{id}', [AdminOrderController::class, 'giftDestroy'])->name('gift.orders.destroy');

        Route::get('orders/ring', [AdminOrderController::class, 'ringIndex'])->name('ring.orders');
    Route::delete('orders/ring/{id}', [AdminOrderController::class, 'ringDestroy'])->name('ring.orders.destroy');



});

// TEMPORARY: Test logging route for debugging
Route::get('logtest', function() {
    \Log::info('Log test route hit!');
    return 'Logged!';
});




