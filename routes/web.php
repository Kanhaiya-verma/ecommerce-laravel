<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::get('register', [AuthController::class, 'register_view'])->name('register');
    Route::post('register', [AuthController::class, 'register'])->name('register');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', [AuthController::class, 'dashboard'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('category', [CategoryController::class, 'category_view'])->name('category');
    Route::post('category', [CategoryController::class, 'category'])->name('category');
    Route::get('/delete/{id}', [CategoryController::class, 'deleteData'])->name('deleteData');
    Route::get('product', [ProductController::class, 'product_view'])->name('product');
    Route::post('product', [ProductController::class, 'product'])->name('product');
    Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('delete-product');
    Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit-product');

});
