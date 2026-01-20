<?php

use App\Http\Controllers\authentication;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/', 'welcome')->name('app');

Route::view('register', 'form');
Route::post('register', [authentication::class, 'up'])->name('register');

Route::view('login', 'login');
Route::post('login', [authentication::class, 'login'])->name('login');
Route::get('welcomePage', [authentication::class, 'logincheck'])->name('logincheck');
Route::get('logout', [authentication::class, 'logout'])->name('logout');

Route::get('admin', [authentication::class, 'displayData']);
