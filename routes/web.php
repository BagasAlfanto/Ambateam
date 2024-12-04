<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AnalizedController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');


// Test
Route::get('/testbro', function () {
    return view('test');
})->name('test');

// Login
Route::get('/login', [LoginController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');

// Register
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::POST('/regist', [RegisterController::class, 'regist'])->name('regist');

Route::get('/register', function () {
    return view('register');
});

Route::delete('/logout', LogoutController::class)->name('logout')->middleware('auth');

Route::get('/home', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/track', function () {
    return view('track');
});

Route::get('/module', function () {
    return view('module');
});

// TambahData
Route::get('/analized', [AnalizedController::class, 'tambahdata'])->name('tambahdata');
Route::post('/insertdata', [AnalizedController::class, 'insertdata'])->name('insert');
