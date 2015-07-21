<?php

namespace App\Providers;

use App\Helpers\MyHtml;
use Illuminate\Support\ServiceProvider;

class MyHtmlServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('myHtml', function(){
            return new MyHtml();
        });
    }
}
