<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        \Illuminate\Support\Facades\View::share('site', cache()->remember('site_settings', 60, function () {
            return \App\Models\SiteSetting::pluck('value', 'key')->toArray();
        }));
    }
}
