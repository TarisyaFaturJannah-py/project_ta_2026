<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EbookController; // Pastikan ini ada
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('dashboard.user');
});

Route::get('/admin', function () {
    return view('dashboard.admin');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/profile', function () {
    return view('profile.index');
});

// Pintu halaman Ebook
Route::get('/ebooks', [EbookController::class, 'index']);

// Pintu frontend lainnya
Route::get('/ebooks/create', function () {
    return view('ebooks.create');
});

Route::get('/ebooks/detail', function () {
    return view('ebooks.detail');
});

Route::get('/categories', function () {
    return view('categories.index');
});

Route::get('/dashboard-user', function () {
    return view('dashboard.user');
});

Route::get('/dashboard-admin', function () {
    return view('dashboard.admin');
});

Route::get('/cek-buku', function () {
    return view('ebooks.cek-buku');
});

