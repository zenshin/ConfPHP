<?php

namespace App\Providers;

use App\Helpers\CurrentPostId;
use Illuminate\Support\ServiceProvider;

class CurrentPostIdServiceProvider extends ServiceProvider
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
        $this->app->singleton('currentPostId', function(){
            return new CurrentPostId();
        });
    }
}
