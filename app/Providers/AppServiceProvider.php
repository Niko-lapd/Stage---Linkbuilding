<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Contracts\View\View;

use App\Cart;

use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            '*', 
            function (View $view) {
                $view->with('cart', DB::table("carts")->where('customer_id', auth()->id())->get()->count());
            }
        );
    }
}
