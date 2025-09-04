<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Ring;
use App\Models\Gift;
use App\Models\Newsbar;

class ViewServiceProvider extends ServiceProvider
{
public function boot(): void
{
    View::composer('*', function ($view) {
        $rings = Ring::all();
         $gifts = Gift::all();
        $newsbars = Newsbar::all();
        $view->with([
            'rings' => $rings,
            'gifts' => $gifts,
            'newsbars' => $newsbars,
        ]);
    });
}


    public function register(): void
    {
        //
    }
}
