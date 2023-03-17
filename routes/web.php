<?php

use Illuminate\Support\Facades\Route;
use App\Models\Page;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

// Admin
    Route::get('admin', [App\Http\Controllers\Admin\LoginController::class, 'adminLogin'])->name('admin.login');
    Route::post('admin/start', [App\Http\Controllers\Admin\LoginController::class, 'postLogin'])->name('admin.postLogin');
    Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function(){
        // Dashboard
        Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        // customer
        Route::get('customers', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('customers');
        Route::get('customer/{id}/edit', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('customer.edit');
        Route::patch('customer/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('customer.update');
        // verified-Seller
        Route::get('verified-sellers', [App\Http\Controllers\Admin\UserController::class, 'verifiedSellerIndex'])->name('verified-sellers');
        Route::get('verified-seller/{id}/edit', [App\Http\Controllers\Admin\UserController::class, 'verifiedSellerEdit'])->name('verified-seller.edit');
        Route::patch('verified-seller/{id}', [App\Http\Controllers\Admin\UserController::class, 'verifiedSellerUpdate'])->name('verified-seller.update');
        // unverified-Seller
        Route::get('unverified-sellers', [App\Http\Controllers\Admin\UserController::class, 'unverifiedSellerIndex'])->name('unverified-sellers');
        Route::get('unverified-seller/{id}/edit', [App\Http\Controllers\Admin\UserController::class, 'unverifiedSellerEdit'])->name('unverified-seller.edit');
        Route::patch('unverified-sellers/{id}', [App\Http\Controllers\Admin\UserController::class, 'unverifiedSellerUpdate'])->name('unverified-seller.update');
        // common users
        Route::delete('user/destroy/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('user.destroy');
        Route::get('user/activate/{id}', [App\Http\Controllers\Admin\UserController::class, 'activate'])->name('user.activate');
        Route::get('user/deactivate/{id}', [App\Http\Controllers\Admin\UserController::class, 'deactivate'])->name('user.deactivate');

        // Banner
        Route::get('banners', [App\Http\Controllers\Admin\BannerController::class, 'index'])->name('banners');
        Route::get('banner/create', [App\Http\Controllers\Admin\BannerController::class, 'create'])->name('banner.create');
        Route::post('banner/store', [App\Http\Controllers\Admin\BannerController::class, 'store'])->name('banner.store');
        Route::get('banner/{id}/edit', [App\Http\Controllers\Admin\BannerController::class, 'edit'])->name('banner.edit');
        Route::patch('banner/{id}', [App\Http\Controllers\Admin\BannerController::class, 'update'])->name('banner.update');
        Route::delete('banner/destroy/{id}', [App\Http\Controllers\Admin\BannerController::class, 'destroy'])->name('banner.destroy');
        Route::post('banner/toggle/{id}', [App\Http\Controllers\Admin\BannerController::class, 'toggle'])->name('banner.toggle');

        // Pages
    });

// Seller
    Route::get('seller', [App\Http\Controllers\Seller\LoginController::class, 'sellerLogin'])->name('seller.login');
    Route::post('seller/start', [App\Http\Controllers\Seller\LoginController::class, 'postLogin'])->name('seller.postLogin');
    Route::group(['as'=>'seller.','prefix'=>'seller','namespace'=>'Seller','middleware'=>['auth','seller']], function(){
        // Dashboard
        Route::get('dashboard', [App\Http\Controllers\Seller\DashboardController::class, 'index'])->name('dashboard');
    });


// Customer
    Route::group(['as'=>'customer.','prefix'=>'customer','namespace'=>'Customer','middleware'=>['auth','customer']], function(){
        // Dashboard
        Route::get('dashboard', [App\Http\Controllers\Customer\DashboardController::class, 'index'])->name('dashboard');
    });