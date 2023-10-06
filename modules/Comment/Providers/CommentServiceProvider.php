<?php

namespace Comment\Providers;

use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/../Resources/Views','Comments');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migration');
        $this->loadRoutesFrom(__DIR__.'/../Routes/comment_routes.php');
    }

    public function boot() {

    }

}
