<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/food-detail', function () {
    return view('food-detail');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/signup', [AuthController::class, 'showFormRegister']);

Route::get('/login', [AuthController::class, 'showFormLogin']);

Route::post('/signup', [AuthController::class, 'signup']);

Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);