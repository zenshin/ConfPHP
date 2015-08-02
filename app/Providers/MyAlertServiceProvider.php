<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\MyAlert;

class MyAlertServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('alert', function(){
            return new MyAlert();
        });
    }
}


