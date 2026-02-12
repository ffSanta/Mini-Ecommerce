<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class,'create']);
Route::PUT('/login',[LoginController::class,'store']);

Route::get('/register',[RegisterController::class,'create']);
Route::PUT('/register',[RegisterController::class,'store']);

Route::get('/products',[ProductController::class,'index']);
Route::get('/products/create',[ProductController::class,'create']);
Route::put('/products',[ProductController::class,'store']);
Route::get('/products/{id}',[ProductController::class,'show']);
Route::get('/products/{id}/edit',[ProductController::class,'edit']);
Route::PUT('/products/{id}',[ProductController::class,'update']);
Route::delete('/products/{id}',[ProductController::class,'destroy']);
