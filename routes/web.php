<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\AnalizedController;

Route::view('/', 'landingpage')->name('landingpage');

Route::middleware('guest')->group(function () {
    // Login
    Route::resource('/login', LoginController::class)
        ->only(['index', 'store'])
        ->name('index', 'login');

    // Register
    Route::resource('/register', RegisterController::class)
        ->only(['index', 'store'])
        ->name('index', 'register');
});

Route::middleware('auth')->group(function () {
    Route::delete('/logout', LogoutController::class)->name('logout');

    Route::view('/dashboard', 'dashboard');

    // TambahData
    Route::get('/analized', [AnalizedController::class, 'tambahdata'])->name('tambahdata');
    Route::post('/insertdata', [AnalizedController::class, 'insertdata'])->name('insert');
});
