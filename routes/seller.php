<?php

use App\Http\Controllers\Seller\Auth\AuthController;
use App\Http\Controllers\Seller\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('seller')->group(function () {
    Route::get('/register', [AuthController::class, 'get_seller_register'])->name('get.seller.register');
    Route::post('register', [AuthController::class, 'register'])->name('seller.register');
    Route::get('/login', [AuthController::class, 'get_seller_login'])->name('get.seller.login');
    Route::post('login', [AuthController::class, 'login'])->name('seller.login');
    Route::get('active-page', [AuthController::class, 'deactivate'])->name('seller.deactivate');

    Route::middleware(['auth:seller', 'is_active'])->group(function () {
        //Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('seller.dashboard');
        //logout
        Route::get('logout', [AuthController::class, 'logout'])->name('seller.logout');
    });
});
