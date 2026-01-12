<?php

use App\Http\Controllers\filehandlingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/file', function () {
    return view('file_upload');
})->name('file');

Route::post('/file', [filehandlingController::class, 'filehandle']);