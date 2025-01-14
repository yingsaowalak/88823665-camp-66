<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login",
[LoginController::class,'index']);

Route::get("/register",
[RegisterController::class,'index']);

Route::get('/hello', function () {
    return "<h1>Hello World!</h1>";
});

Route::get('/', function () {
    return view ('layouts.default');
});

Route::get('/home', function () {
    return view ('layouts.default');
});


Route::get("/mycontroller/{id?}",[MyController::class,'myfunction']);

Route::post("/mycontroller/{id?}",[MyController::class,'myfunction']);



Route::get('/hello/{id?}', function ($val="") {
    return "<h1>Hello World $val</h1>";
});
