<?php

namespace Uploader\Providers;

use Illuminate\Support\ServiceProvider;

class UploaderServiceProvider extends ServiceProvider
{

    /**
     * Register services
     */

    public function register()
    {
        $this->loadMigrationsFrom(module_path('Uploader', 'Database\\Migrations'));
        $this->loadRoutesFrom(module_path('Uploader', 'Routes\\uploader_routes.php'));
        $this->loadViewsFrom(module_path('Uploader','Resources\\Views'),'Uploader');
    }

    /**
     * Bootstrap services
     */

    public function boot()
    {

    }

}
