<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\RingPackage;
use App\Models\Ring;
use App\Models\Gift;
use App\Models\SubscriptionPlan;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
       View::composer('partials.frontend._ringpackages', function ($view) {
    // $packages = RingPackage::all();
    $rings = Ring::all();
    $gifts = Gift::all();
    $plans = SubscriptionPlan::all();

    $ringPackages = [];
$giftPackages = [];
foreach ($rings as $ring) {
    $ringPackages[$ring->id] = [
        'price' => $ring->price,
        'detail' => $ring->description,
        'couples' => $ring->couples_connected,
        'rings' => $ring->rings_count,
        'name' => $ring->title,
        'bestValue' => false, // Optional: logic to determine
    ];
}

foreach ($gifts as $gift) {
    $giftPackages[$gift->id] = [
        'price' => $gift->price,
        'detail' => $gift->description,
        'couples' => $gift->couples_connected,
        'rings' => $gift->rings_count,
        'name' => $gift->title,
        'bestValue' => false, // Optional: logic to determine
    ];
}
   


    $view->with([
       
        'plans' => $plans,
         'rings' => $rings,
         'gifts' => $gifts,
    'ringPackages' => $ringPackages,
    'giftPackages' => $giftPackages,
    ]);
});

    }
}
