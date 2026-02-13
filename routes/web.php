<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return redirect('/products');
});

Route::get('/login',[LoginController::class,'create']);
Route::PUT('/login',[LoginController::class,'store']);
Route::get('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'create']);
Route::PUT('/register',[RegisterController::class,'store']);

Route::get('/products',[ProductController::class,'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('/products/create',[ProductController::class,'create']);
    Route::put('/products',[ProductController::class,'store']);
    Route::get('/products/{id}',[ProductController::class,'show']);
    Route::get('/products/{id}/edit',[ProductController::class,'edit']);
    Route::PATCH('/products/{id}',[ProductController::class,'update']);
    Route::delete('/products/{id}',[ProductController::class,'destroy']);
});

