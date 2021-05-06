<?php

declare(strict_types=1);

namespace JustSteveKing\Laravel\LaravelRedoc;

use Illuminate\Support\ServiceProvider;

class RedocServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // Publish Config
            $this->publishes([
                __DIR__ . '/../config/redoc.php' => config_path('redoc.php'),
            ], 'config');

            // Publish Views
            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/redoc'),
            ], 'views');
        }

        $this->loadRoutesFrom(
            __DIR__ . '/../routes/redoc.php'
        );

        $this->loadViewsFrom(
            __DIR__ . '/../resources/views',
            'redoc',
        );
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/redoc.php',
            'redoc',
        );
    }
}
