<?php

namespace Comment\Providers;

use Comment\Database\Seeders\CommentSeeder;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Comment');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migration');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/comment_routes.php');

        DatabaseSeeder::$seeders[7] = CommentSeeder::class;
    }

    public function boot()
    {

    }

}
