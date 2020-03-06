<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RegFrmCountriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('auth.register', 'App\Http\ViewComposers\RegFrmCountriesComposer');
    }
}
