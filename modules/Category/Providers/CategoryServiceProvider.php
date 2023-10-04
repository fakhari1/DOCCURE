<?php

namespace Category\Providers;

use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{

    /**
     * Register services
     */
    public function register()
    {
        $this->loadRoutesFrom(module_path('Category', 'Routes\\category_routes.php'));
        $this->loadMigrationsFrom(module_path('Category'));
        $this->loadViewsFrom(__DIR__.'/../Resources/Views/','Categories');

    }


    /**
     * Bootstrap services
     */
    public function boot()
    {

    }


}
