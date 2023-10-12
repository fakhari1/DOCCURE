<?php

namespace Category\Providers;

use Category\Database\Seeders\CategorySeeder;
use Database\Seeders\DatabaseSeeder;
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
        $this->loadViewsFrom(module_path('Category', 'Resources\\Views'), 'Categories');

        DatabaseSeeder::$seeders[0] = CategorySeeder::class;
    }


    /**
     * Bootstrap services
     */
    public function boot()
    {

    }


}
