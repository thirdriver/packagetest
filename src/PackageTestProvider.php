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

        // 模板文件 可覆盖
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'packagetest');


        // 可覆盖原配置文件
        $this->mergeConfigFrom(
            __DIR__ . '/../config/packagetest.php', 'packagetest'
        );

        // 路由
        if (! $this->app->routesAreCached())
        {
            require __DIR__ . '/../routes/routes.php';
        }


        if ($this->app->runningInConsole()) {
            // 自动执行 migrate
            $this->loadMigrationsFrom(__DIR__ . '/../migrations');

            // 配置文件
            $this->publishes([
                __DIR__ . '/../config/packagetest.php' => config_path('packagetest.php'),
            ]);

            // 发布view
            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/packagetest'),
            ]);

        }

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
