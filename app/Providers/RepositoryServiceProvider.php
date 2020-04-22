<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\StoryRepository;
use App\Repositories\Interfaces\StoryRepositoryInterface;
use App\Repositories\CommentRepository;
use App\Repositories\Interfaces\CommentRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            StoryRepositoryInterface::class,
            StoryRepository::class
        );

        $this->app->bind(
            CommentRepositoryInterface::class,
            CommentRepository::class
        );
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
