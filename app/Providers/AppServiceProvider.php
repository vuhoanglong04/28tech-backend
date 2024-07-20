<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public $bindings  = [
        'App\Services\Interfaces\UserServiceInterface'=>'App\Services\UserService',
    ];

    public function register(): void
    {
        foreach($this->bindings as $key=>$value){
            $this->app->bind($key , $value);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
