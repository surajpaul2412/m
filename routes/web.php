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

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function(){
    // Dashboard
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['as'=>'seller.','prefix'=>'seller','namespace'=>'Seller','middleware'=>['auth','seller']], function(){
    // Dashboard
    Route::get('dashboard', [App\Http\Controllers\Seller\DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['as'=>'customer.','prefix'=>'customer','namespace'=>'Customer','middleware'=>['auth','customer']], function(){
    // Dashboard
    Route::get('dashboard', [App\Http\Controllers\Customer\DashboardController::class, 'index'])->name('dashboard');
});