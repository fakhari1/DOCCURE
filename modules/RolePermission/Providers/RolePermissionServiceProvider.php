<?php

namespace RolePermission\Providers;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\ServiceProvider;
use RolePermission\Database\Seeders\RolePermissionSeeder;

class RolePermissionServiceProvider extends ServiceProvider
{


    /**
     * Register services
     */

    public function register()
    {
        $this->loadMigrationsFrom(module_path('RolePermission', 'Database\\Migrations'));
        $this->loadRoutesFrom(module_path('RolePermission', 'Routes\\role_permission_routes.php'));
        $this->mergeConfigFrom(module_path('RolePermission', 'Configs\\permission.php'), 'permission');

        DatabaseSeeder::$seeders[1] = RolePermissionSeeder::class;
    }

}
