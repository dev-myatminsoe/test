<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', [ProductCategoryController::class, 'all']);
Route::get('/category/{categoryId}', [ProductCategoryController::class, 'get']);
Route::post('/category/create', [ProductCategoryController::class, 'create']);
Route::post('/category/update/{categoryId}', [ProductCategoryController::class, 'update']);
Route::post('/category/delete/{categoryId}', [ProductCategoryController::class, 'delete']);

Route::get('/product', [ProductController::class, 'all']);
Route::get('/product/{productId}', [ProductController::class, 'get']);
Route::post('/product/create', [ProductController::class, 'create']);
Route::post('/product/update/{productId}', [ProductController::class, 'update']);
Route::post('/product/delete/{productId}', [ProductController::class, 'delete']);

Route::get('/cart', [CartController::class, 'all']);
Route::post('/cart/add', [CartController::class, 'addItem']);
Route::post('/cart/remove/{id}', [CartController::class, 'removeItem']);
Route::post('/cart/clear', [CartController::class, 'clear']);
