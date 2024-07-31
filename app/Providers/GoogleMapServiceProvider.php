<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GoogleMapServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->share('googleMapsApiKey', env('GOOGLE_MAPS_API_KEY'));
    }
}
