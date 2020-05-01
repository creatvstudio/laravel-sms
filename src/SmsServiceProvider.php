<?php

namespace CreatvStudio\Sms;

use CreatvStudio\Sms\SmsManager;
use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/sms.php' => config_path('sms.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/sms.php', 'sms');

        // Register the main class to use with the facade
        $this->app->singleton('sms', function ($app) {
            return new SmsManager($app);
        });

        // Register the sms manager instance.
        $this->app->singleton('sms.sender', function($app) {
            return $app['sms']->driver();
        });

        $this->app->bind(\CreatvStudio\Sms\Contracts\Sms::class, function ($app) {
            return $app->make('sms.sender');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'sms', 'sms.sender',
        ];
    }
}
