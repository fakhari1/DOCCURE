<?php

namespace Otp\Providers;

use Illuminate\Support\ServiceProvider;

class OtpServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->loadMigrationsFrom(module_path('Otp', 'Database\\Migrations'));
    }
}
