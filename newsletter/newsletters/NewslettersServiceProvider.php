<?php

namespace Newsletters;

use Illuminate\Support\ServiceProvider;

class NewslettersServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {
            require __DIR__.'/routes.php';
        }
        $this->loadViewsFrom(__DIR__.'/../newsletters/views', 'newsletters');
    
        $this->publishes([
                __DIR__.'/config/newsletter.php' => config_path('newsletter.php')
            ], 'config');
    }   

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
    