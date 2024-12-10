<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Dashboard\AnalizedController;
use App\Http\Controllers\Dashboard\DashboardController;

Route::view('/', 'pages.landing')->name('landing');

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
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    // TambahData
    Route::post('/analyze', AnalizedController::class)->name('analyze');
});
