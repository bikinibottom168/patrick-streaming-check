<?php

namespace patrick\bikinibottom;

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
        $this->app->make('patrick\bikinibottom\ฺBikiniBottomVideoController');
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
