<?php

namespace bikinibottom;

use Illuminate\Support\ServiceProvider;

class BikiniBottmServiceProvider extends ServiceProvider
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
}
