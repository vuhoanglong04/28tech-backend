<?php

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
Route::get('/' ,[AuthController::class , 'login'])->name('login');
Route::get('/login' ,[AuthController::class , 'login'])->name('login');
Route::post('/login' ,[AuthController::class , 'handleLogin'])->name('login');

Route::get('/signup' ,[AuthController::class , 'signup'])->name('signup');
Route::post('/signup' ,[AuthController::class , 'handleSignup'])->name('signup');

Route::get('/logout' ,[AuthController::class , 'logout'])->name('logout');

Route::prefix('/dashboard')->middleware('auth')->group(function(){
    Route::get('/' ,[DashboardController::class , 'index']);
    Route::get('/groups' ,[GroupsController::class , 'index'])->name('groups.index');
});