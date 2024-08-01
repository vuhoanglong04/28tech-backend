<?php

use App\Http\Controllers\BannersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UserReviewsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VouchersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('login');

Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/signup', [AuthController::class, 'handleSignup'])->name('signup');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('/dashboard')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    //GROUPS
    Route::resource('groups', GroupsController::class);

    //USERS
    Route::resource('users', UsersController::class);
    Route::get('users/restore/{user}', [UsersController::class, "restore"])->name('users.restore');
    Route::delete('users/forceDelete/{user}', [UsersController::class, "forceDelete"])->name('users.forceDelete');

    //CATEGORIES
    Route::resource('categories', CategoriesController::class);
    Route::get('categories/restore/{category}', [CategoriesController::class, "restore"])->name('categories.restore');
    Route::delete('categories/forceDelete/{category}', [CategoriesController::class, "forceDelete"])->name('categories.forceDelete');


    //COURSES
    Route::resource('courses', CoursesController::class);
    Route::get('courses/restore/{course}', [CoursesController::class, "restore"])->name('courses.restore');
    Route::delete('courses/forceDelete/{course}', [CoursesController::class, "forceDelete"])->name('courses.forceDelete');

    //CLASSES 
    Route::resource('classes', ClassesController::class);
    Route::get('classes/restore/{class}', [ClassesController::class, "restore"])->name('classes.restore');
    Route::delete('classes/forceDelete/{class}', [ClassesController::class, "forceDelete"])->name('classes.forceDelete');


    //VOUCHERS 
    Route::resource('vouchers', VouchersController::class);

    //VOUCHERS 
    Route::resource('banners', BannersController::class);
    Route::get('banners/restore/{banner}', [BannersController::class, "restore"])->name('banners.restore');
    Route::delete('banners/forceDelete/{banner}', [BannersController::class, "forceDelete"])->name('banners.forceDelete');


    //ORDERS 
    Route::resource('orders', OrdersController::class);
    Route::get('orders/restore/{order}', [OrdersController::class, "restore"])->name('orders.restore');
    Route::delete('orders/forceDelete/{order}', [OrdersController::class, "forceDelete"])->name('orders.forceDelete');


    //REVIEWS 
    Route::resource('reviews', UserReviewsController::class);
    Route::get('reviews/restore/{review}', [UserReviewsController::class, "restore"])->name('reviews.restore');
    Route::get('reviews/forceDelete/{review}', [UserReviewsController::class, "forceDelete"])->name('reviews.forceDelete');

});