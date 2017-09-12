<?php

namespace Geckob\RouteList\Provider;

use Illuminate\Support\ServiceProvider;

class RouteListServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $routePath = __DIR__ . '/../routes/routes.php';

        $this->loadRoutesFrom($routePath);

        $this->loadViewsFrom(__DIR__ . '/../views/', 'RouteList');


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }


}
