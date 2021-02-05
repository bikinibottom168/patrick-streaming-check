<?php

namespace Bikinibottom\Video;

use Illuminate\Support\ServiceProvider;
use Bikinibottom\Video;

class BikiniBottomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->alias(Video::class, 'Video');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function provides()
    {
        return [Video::class];
    }
}
