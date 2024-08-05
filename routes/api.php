<?php

use App\Http\Controllers\API\OrdersController;
use App\Http\Controllers\API\ReviewsController;
use App\Http\Controllers\API\VouchersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UsersController;
use App\Http\Controllers\API\CoursesController;
use App\Http\Controllers\API\CategoriesController;
use App\Http\Controllers\API\PaymentOnlineController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('auth/register', [AuthController::class, 'register']);
Route::get('auth/login', [AuthController::class, 'login']);
Route::post('auth/refresh', [AuthController::class, 'refresh']);
Route::post('auth/login', [AuthController::class, 'login']);

Route::get('categories', [CategoriesController::class, 'index']);
Route::get('courses', [CoursesController::class, 'index']);
Route::get('courses/{slug}', [CoursesController::class, 'show']);


Route::middleware('jwt')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('user', [AuthController::class, 'getUser']);
    Route::get('users/{id}', [UsersController::class, 'show']);
    Route::patch('users/{id}', [UsersController::class, 'update']);

    Route::get('orders', [OrdersController::class, 'index']);
    Route::get('orders/{id}', [OrdersController::class, 'show']);
    Route::post('orders', [OrdersController::class, 'store']);
    Route::patch('orders/{id}', [OrdersController::class, 'update']);


    Route::get('reviews', [ReviewsController::class, 'index']);
    Route::post('reviews', [ReviewsController::class, 'store']);

    Route::get('vouchers/{code}', [VouchersController::class, 'show']);

    Route::post('momo', [PaymentOnlineController::class, 'momo'])->name('momo');
    Route::post('vnpay', [PaymentOnlineController::class, 'vnpay'])->name('vnpay');
});
