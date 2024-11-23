<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');

Route::get('/login', [LoginController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');


Route::get('/register', function () {
    return view('register');
});

Route::delete('/logout', LogoutController::class)->name('logout')->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');