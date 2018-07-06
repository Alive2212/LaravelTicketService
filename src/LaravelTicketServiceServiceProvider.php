<?php

namespace Alive2212\LaravelTicketService;

use Illuminate\Support\ServiceProvider;

class LaravelTicketServiceServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'alive2212');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'alive2212');
         $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
         $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the configuration file.
            $this->publishes([
                __DIR__.'/../config/laravelticketservice.php' => config_path('laravelticketservice.php'),
            ], 'laravelticketservice.config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/alive2212'),
            ], 'laravelticketservice.views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/alive2212'),
            ], 'laravelticketservice.views');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/alive2212'),
            ], 'laravelticketservice.views');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravelticketservice.php', 'laravelticketservice');

        // Register the service the package provides.
        $this->app->singleton('laravelticketservice', function ($app) {
            return new LaravelTicketService;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravelticketservice'];
    }
}