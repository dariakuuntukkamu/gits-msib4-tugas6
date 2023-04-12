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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//product
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('/detail/productadd', [App\Http\Controllers\ProductController::class, 'create']);
Route::get('/product/{id}/edit', [App\Http\Controllers\ProductController::class, 'edit']);
Route::get('/product/{id}/delete', [App\Http\Controllers\ProductController::class, 'destroy']);
Route::post('/product',[App\Http\Controllers\ProductController::class, 'store']);
Route::put('/product/{id}', [App\Http\Controllers\ProductController::class, 'update']);

//category
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index']);