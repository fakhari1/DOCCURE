<?php

namespace Scheduling\Providers;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\ServiceProvider;
use Scheduling\Migrations\Seeders\OpenDateSeeder;
use Scheduling\Migrations\Seeders\OpenDateStatusSeeder;
use Scheduling\Migrations\Seeders\OpenTimeSeeder;
use Scheduling\Migrations\Seeders\OpenTimeStatusSeeder;

class SchedulingServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadMigrationsFrom(module_path('Scheduling', 'Migrations\\Database'));
        $this->loadRoutesFrom(module_path('Scheduling', 'Routes\\scheduling_routes.php'));
        $this->loadViewsFrom(module_path('Scheduling', 'Resources\\Views'), 'Scheduling');

        DatabaseSeeder::$seeders[4] = OpenDateStatusSeeder::class;
        DatabaseSeeder::$seeders[5] = OpenTimeStatusSeeder::class;
        DatabaseSeeder::$seeders[6] = OpenDateSeeder::class;
        DatabaseSeeder::$seeders[7] = OpenTimeSeeder::class;
    }
}
