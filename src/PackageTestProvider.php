<?php

namespace ThirdRiver\PackageTest;

use Illuminate\Support\ServiceProvider;

class PackageTestProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton('packagetest', function() {
            return new TestController();
        });

    }


}
