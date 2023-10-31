<?php

namespace Scheduling\Providers;

use Illuminate\Support\ServiceProvider;

class SchedulingServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadMigrationsFrom(module_path('Scheduling', 'Migrations\\Database'));
        $this->loadRoutesFrom(module_path('Scheduling', 'Routes\\scheduling_routes.php'));
        $this->loadViewsFrom(module_path('Scheduling', 'Resources\\Views'), 'Scheduling');
    }
}
