<?php

namespace App\Providers;

use App\Http\Repositories\Contracts\UserRepositoryInterface;
use App\Http\Repositories\Eloquents\UserEloquentRepository;
use App\Http\Services\Impl\UserService;
use App\Http\Services\UserServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserRepositoryInterface::class,UserEloquentRepository::class);
        $this->app->singleton(UserServiceInterface::class,UserService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
