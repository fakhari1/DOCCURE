<?php

namespace Settings\Providers;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\ServiceProvider;
use Settings\Database\Seeders\GeneralSettingsSeeder;

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

        DatabaseSeeder::$seeders[3] = GeneralSettingsSeeder::class;
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
