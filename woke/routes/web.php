<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;

// Route untuk halaman utama (home)
Route::get('/', function () {
    return view('home');
});

// Resource routes untuk books dan students
Route::resource('books', BookController::class);
Route::resource('students', StudentController::class);
