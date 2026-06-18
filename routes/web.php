<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EbookController;

Route::get('/', function () {
    return view('dashboard.user');
});

// Pintu halaman Ebook
Route::get('/ebooks', [EbookController::class, 'index']);

// Pintu untuk mengeksekusi fitur API Backend-mu
Route::get('/cek-buku', [EbookController::class, 'cekBukuDariInternet']);

use App\Http\Controllers\AuthController;

// Jalur yang akan ditembak oleh Frontend untuk Login
Route::post('/login', [AuthController::class, 'login']);

use App\Http\Controllers\RegisterController;

Route::post('/register', [RegisterController::class, 'register']);