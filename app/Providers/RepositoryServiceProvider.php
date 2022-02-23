<?php

namespace App\Providers;

use App\Repositories\Categories\CategoryRepositoryEloquent;
use App\Repositories\Categories\CategoryRepositoryInterface;
use App\Repositories\Comments\CommentRepositoryEloquent;
use App\Repositories\Comments\CommentRepositoryInterface;
use App\Repositories\Images\ImageRepositoryEloquent;
use App\Repositories\Images\ImageRepositoryService;
use App\Repositories\Posts\PostRepositoryEloquent;
use App\Repositories\Posts\PostRepositoryInterface;
use App\Repositories\Users\UserRepositoryEloquent;
use App\Repositories\Users\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CommentRepositoryInterface::class, CommentRepositoryEloquent::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepositoryEloquent::class);
        $this->app->bind(PostRepositoryInterface::class, PostRepositoryEloquent::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepositoryEloquent::class);
        $this->app->bind(ImageRepositoryService::class, ImageRepositoryEloquent::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
