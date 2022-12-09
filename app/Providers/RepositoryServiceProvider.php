<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\BookRepository;
use App\Repositories\Interfaces\BookRepositoryInterface;

use App\Repositories\UserRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;


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
            BookRepositoryInterface::class, 
            BookRepository::class
        );    
        $this->app->bind(
            UserRepositoryInterface::class, 
            UserRepository::class
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
