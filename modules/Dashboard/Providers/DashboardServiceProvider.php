<?php

namespace Dashboard\Providers;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{

    /**
     * Register services
     */
    public function register()
    {
        $this->loadRoutesFrom(module_path('Dashboard', 'Routes\\dashboard_routes.php'));
        $this->loadMigrationsFrom(module_path('Dashboard'));
        $this->loadViewsFrom(module_path('Dashboard', 'Resources\\Views'), 'Dashboard');
    }


    /**
     * Bootstrap services
     */
    public function boot()
    {

    }


}
