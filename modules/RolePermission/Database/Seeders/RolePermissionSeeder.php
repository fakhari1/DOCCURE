<?php

namespace RolePermission\Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{

    public function run() {
        foreach (\RolePermission\Models\Permission::$permissions as $permission) {
            Permission::findOrCreate($permission);
        }

        foreach (\RolePermission\Models\Role::$roles as $name => $permissions) {
            Role::findOrCreate($name)->givePermissionTo($permissions);
        }
    }
}
