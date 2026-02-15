<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return redirect('/products');
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/login', [LoginController::class, 'create']);
Route::PUT('/login', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'create']);
Route::PUT('/register', [RegisterController::class, 'store']);

Route::get('/products/category', [ProductCategoriesController::class, 'category'])->name('products.category');
Route::get('/products/showAll/{id}', [ProductController::class, 'showAll']);
Route::get('/products/{id}', [ProductController::class, 'show']);

Route::middleware(['auth'])->group(function () {

    Route::get('/products/category/create', [ProductCategoriesController::class, 'createCategory']);
    Route::put('/products/category', [ProductCategoriesController::class, 'storeCategory']);
    Route::get('/products/category/{id}', [ProductCategoriesController::class, 'show']);
    Route::get('/products/category/{id}/edit', [ProductCategoriesController::class, 'editCategory']);
    Route::patch('/products/category/{id}', [ProductCategoriesController::class, 'updateCategory']);
    Route::delete('/products/category/{id}', [ProductCategoriesController::class, 'destroyCategory']);

    Route::get('/products/query/{id}', [ProductController::class, 'query']);
    Route::get('/products/create/{categoryId}', [ProductController::class, 'create']);
    Route::put('/products', [ProductController::class, 'store']);
    Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
    Route::PATCH('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);

});

