<?php

namespace Bikinibottom\Video;

use Illuminate\Support\ServiceProvider;

class BikiniBottomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('bikinibottom\video\src\ฺBikiniBottomVideoController');
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
