<?php

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
