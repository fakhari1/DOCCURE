<?php
namespace Banner\Providers;
use Carbon\Laravel\ServiceProvider;

class BannerServiceProvider extends ServiceProvider
{
   public function register()
   {
       $this->loadRoutesFrom(module_path('Banner','Routes\\banner_routes.php'));
       $this->loadMigrationsFrom(module_path('Banner','Database\\Migrations'));
       $this->loadViewsFrom(module_path('Banner','Resources\\Views'),'Banners');
   }
   public function boot()
   {
   }
}
