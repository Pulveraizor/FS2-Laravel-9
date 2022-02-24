<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Orders\OrderController;
use App\Http\Controllers\Contact;

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

Route::get('/', [ProductController::class, 'products']);
Route::get('/products', [ProductController::class, 'products'])->name('Products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('Products.show');
Route::get('/products/{category}', [ProductController::class, 'filter'])->name('Products.filter');
Route::get('/orders', [OrderController::class, 'orders']);
Route::get('/contact', [Contact::class, 'contact']);
