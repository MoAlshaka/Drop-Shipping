<?php

use App\Http\Controllers\Admin\ActiveSellerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
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

Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'get_admin_login'])->name('get.admin.login');
    Route::post('login', [AuthController::class, 'login'])->name('admin.login');

    Route::middleware("auth:admin")->group(function () {
        //Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        // products
        Route::resource('products', ProductController::class);
        //Categories
        Route::resource('categories', CategoryController::class);
        //Sellers
        Route::get('sellers', [ActiveSellerController::class, 'index'])->name('admin.sellers.index');
        Route::match(['post', 'put', 'patch'], 'active-sellers/{id}', [ActiveSellerController::class, 'active'])->name('admin.sellers.active');

        //logout
        Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');
    });
});
