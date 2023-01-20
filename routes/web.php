<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/product/{slug}', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
Route::get('/lacak}', [App\Http\Controllers\DashboardController::class, 'lacak'])->name('lacak');

Route::middleware(['auth', 'role:user,admin', 'dontback'])->group(function () {
    Route::post('/', [App\Http\Controllers\HomeController::class, 'cart'])->name('addtocart');
    Route::get('/cart', [App\Http\Controllers\HomeController::class, 'showcart'])->name('cart');
    Route::get('/cart/{id}', [App\Http\Controllers\HomeController::class, 'deletecart'])->name('cartDelete');
    Route::get('/payment', [App\Http\Controllers\HomeController::class, 'payment'])->name('pay');
    Route::get('/invoice/{id}', [App\Http\Controllers\HomeController::class, 'invoice'])->name('inv');
    Route::get('/dashboard}', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
});
