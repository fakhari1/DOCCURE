<?php
namespace Front\Providers;

use Illuminate\Support\ServiceProvider;

class FrontServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->loadMigrationsFrom(module_path('Front', 'Database\\Migrations'));
        $this->loadViewsFrom(module_path('Front', 'Resources\\Views'), 'Front');
        $this->loadRoutesFrom(module_path('Front', 'Routes\\front_routes.php'));
    }
}
