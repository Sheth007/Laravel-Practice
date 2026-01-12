<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/login', 'login');

Route::view('/profile', 'profile');

Route::post('/login', [UserController::class, 'login'])->name('login.controller');

Route::get('/logout', [UserController::class, 'logout'])->name('logout.controller');