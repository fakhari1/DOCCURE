<?php

namespace Settings\Providers;

use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->loadMigrationsFrom(module_path('Settings', 'Database\\Migrations'));
        $this->loadRoutesFrom(module_path('Settings', 'Routes\\settings_routes.php'));
        $this->mergeConfigFrom(module_path('Settings', 'Configs\\settings.php'), 'settings');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
