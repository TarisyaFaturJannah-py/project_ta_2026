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