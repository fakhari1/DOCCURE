<?php

namespace Common\Providers;

use Illuminate\Support\ServiceProvider;

class CommonServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(module_path('Common', 'Configs\\Sms\\sms.php'), 'sms');
    }

    public function boot() {

    }
}
