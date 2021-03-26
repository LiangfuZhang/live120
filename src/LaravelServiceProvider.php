<?php

namespace Gary\Live;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Foundation\Application as LaravelApplication;

class LaravelServiceProvider extends BaseServiceProvider
{

    /**
     * Setup the config.
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__ . '/../config/live.php');
        if ($this->app->runningInConsole()) {
            $this->publishes([$source => base_path('config/live.php')], 'Live');
        }
        if ($this->app instanceof LaravelApplication) {
            $this->app->configure('Live');
        }
        $this->mergeConfigFrom($source, 'Live');
    }

    public function register()
    {
        $this->setupConfig();
        $this->app->singleton(Live::class, function ($app) {
            return new Live(config('Live'));
        });
        $this->app->alias(Live::class, 'Live');
    }
}