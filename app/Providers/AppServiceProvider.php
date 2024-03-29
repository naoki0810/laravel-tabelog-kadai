<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

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
      
        Paginator::useBootstrap();

        // if (app()->isProduction()) {
        //     URL::forceScheme('https');
        // }
        // if (app()->isLocal()) {
        //     URL::forceScheme('http');           
        // }
        
        if (request()->isSecure()) {
            URL::forceScheme('https');
        }

        // if (App::environment(['production'])) { 
        //     URL::forceScheme('https');
        // }
    }
}
