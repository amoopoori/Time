<?php

namespace Pooria\Time;

use Illuminate\Support\ServiceProvider;
use Pooria\Time\Facade\Timer;
use Pooria\Time\Middlewares\CheckTime;

class TimeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //rout
        $this->loadRoutesFrom(__DIR__.'/routes.php');

///view
        $this->loadViewsFrom(__DIR__.'/Views', 'MyView');
        $this->publishes([
            __DIR__.'/Views' => resource_path('views/vendor/MyView'),
        ],'MyTag');


        //middleware
        $router=$this->app['router'];
        $router->middleware('checkTime',CheckTime::class);
        ///
        ///
        ///
        /// migration
        ///
        //$this->loadMigrationsFrom(__DIR__.'/Migrations');
        $this->publishes([
            __DIR__.'/Migrations' => database_path('/migrations'),
        ],'MyTag');



        //////binding for facades
        ///
        ///

        $this->app->bind('MyTimer',function()
        {
            return new Timer();

        });

        ///
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //config
        $this->mergeConfigFrom(
        __DIR__.'/Config/config.php', 'MyConfig'
        );
        $this->publishes([
            __DIR__.'/Config/config.php' => config_path('MyConfig.php'),
        ]);
    }
}
