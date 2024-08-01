<?php

namespace App\Providers;

use App\Policies\UsersPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public $bindings = [
        'App\Services\Interfaces\UserServiceInterface' => 'App\Services\UserService',
        'App\Services\Interfaces\GroupsServiceInterface' => 'App\Services\GroupsService',
        'App\Services\Interfaces\CategoriesServiceInterface' => 'App\Services\CategoriesService',
        'App\Services\Interfaces\CoursesServiceInterface' => 'App\Services\CoursesService',
        'App\Services\Interfaces\ClassesServiceInterface' => 'App\Services\ClassesService',
        'App\Services\Interfaces\UserClassesInterface' => 'App\Services\UserClassesService',
        'App\Services\Interfaces\VouchersServiceInterface' => 'App\Services\VouchersService',
        'App\Services\Interfaces\BannersServiceInterface' => 'App\Services\BannersService',
        'App\Services\Interfaces\OrdersServiceInterface' => 'App\Services\OrdersService',
        'App\Services\Interfaces\OrderDetailsInterface' => 'App\Services\OrderDetailsService',
        'App\Services\Interfaces\UserReviewsServiceInterface' => 'App\Services\UserReviewsService',

    ];

    public function register(): void
    {
        foreach ($this->bindings as $key => $value) {
            $this->app->bind($key, $value);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Gate::define('users.view', [UsersPolicy::class, 'view']);
        Gate::define('users.create', [UsersPolicy::class, 'create']);
        Gate::define('users.update', [UsersPolicy::class, 'update']);
        Gate::define('users.delete', [UsersPolicy::class, 'delete']);
        Gate::define('users.forceDelete', [UsersPolicy::class, 'forceDelete']);
        Gate::define('users.restore', [UsersPolicy::class, 'restore']);
        Gate::define('users.detail', [UsersPolicy::class, 'detail']);



    }
}
