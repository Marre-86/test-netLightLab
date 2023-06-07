<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Models\Product;

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

Route::get('/', function () {
    $products = Product::latest()->take(5)->get();
    return view('welcome', compact('products'));
})->name('welcome');

Route::get('login', [LoginController::class, 'create'])
    ->name('login');

Route::post('login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LogoutController::class, 'destroy'])
    ->middleware('auth')->name('logout');

Route::resource('products', ProductController::class)
    ->except(['show','edit','update','delete'])
    ->middleware('can:add-products');
