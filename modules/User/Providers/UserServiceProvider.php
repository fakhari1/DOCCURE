<?php

namespace User\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->loadMigrationsFrom(module_path('User', 'Database\\Migrations'));
        $this->loadRoutesFrom(module_path('User', 'Routes\\user_routes.php'));
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
