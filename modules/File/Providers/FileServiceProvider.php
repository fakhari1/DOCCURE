<?php

namespace File\Providers;

use Illuminate\Support\ServiceProvider;

class FileServiceProvider extends ServiceProvider
{

    /**
     * Register services
     */

    public function register()
    {
        $this->loadMigrationsFrom(module_path('File', 'Database\\Migrations'));
        $this->loadRoutesFrom(module_path('File', 'Routes\\file_routes.php'));
    }

    /**
     * Bootstrap services
     */

    public function boot()
    {

    }

}
