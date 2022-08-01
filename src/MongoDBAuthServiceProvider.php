<?php

namespace Wlokadev\MongoDBAuth;

use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;
use Wlokadev\MongoDBAuth\Models\PersonalAccessToken;

class MongoDBAuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'mongodbauth');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'mongodbauth');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/mongodb_auth.php' => config_path('mongodb_auth.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/mongodbauth'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/mongodbauth'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/mongodbauth'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);

        }

        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
    }

    /**
     * Register the application services.
     */

    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/mongodb_auth.php', 'mongodb_auth');

        // Register the main class to use with the facade
        $this->app->singleton('mongodbauth', function () {
            return new MongoDBAuth;
        });
    }
}
