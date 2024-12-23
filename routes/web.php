<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Models\Food;

Route::get('/', function () {
    $foods = Food::take(3)->get();
    return view('index', compact('foods'));
})->name('home');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/menu', function () {
    $foods = Food::all();
    return view('menu', compact('foods'));
});

Route::get('/food-detail/{id}', function ($id) {

    $food = Food::find($id);
    return view('food-detail', compact('food'));
});

Route::get('/signup', [AuthController::class, 'showFormRegister']);
Route::get('/login', [AuthController::class, 'showFormLogin']);
Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
Route::get('/admin/add-food', [AdminController::class, 'addFood'])->middleware('auth');
Route::post('/admin/add-food', [AdminController::class, 'createFood'])->middleware('auth');

Route::get('/admin/delete/{id}', [AdminController::class, 'deleteFood'])->middleware('auth');
Route::get('/admin/update/{id}', [AdminController::class, 'editFood'])->middleware('auth');

Route::post('/admin/update/', [AdminController::class, 'updateFood'])->middleware('auth');