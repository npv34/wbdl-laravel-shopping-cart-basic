<?php

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

Route::get('/', [\App\Http\Controllers\ShopController::class, 'index'])->name('home.index');
Route::get('/{productId}/add-to-cart', [\App\Http\Controllers\ShopController::class, 'addToCart'])->name('home.addToCart');
Route::get('/cart', [\App\Http\Controllers\ShopController::class, 'getCart'])->name('home.getCart');

