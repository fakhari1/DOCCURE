<?php

namespace RolePermission\Providers;

use Illuminate\Support\ServiceProvider;

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
    }

}
