<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Tracking;
use View;

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
        //
        $tracking = Tracking::all();
        view::share('trackings',$tracking);
    }
}
