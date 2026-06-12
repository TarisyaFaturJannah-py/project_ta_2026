<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

=======
use App\Http\Controllers\EbookController; // <-- INI BARIS YANG HILANG TADI

// Halaman Utama / Dashboard User
>>>>>>> 3830aa6 (first commit)
Route::get('/', function () {
    return view('dashboard.user');
});

<<<<<<< HEAD
=======
// Halaman Dashboard Admin
>>>>>>> 3830aa6 (first commit)
Route::get('/admin', function () {
    return view('dashboard.admin');
});

<<<<<<< HEAD
=======
// Halaman Login
>>>>>>> 3830aa6 (first commit)
Route::get('/login', function () {
    return view('auth.login');
});

<<<<<<< HEAD
=======
// Halaman Register
>>>>>>> 3830aa6 (first commit)
Route::get('/register', function () {
    return view('auth.register');
});

<<<<<<< HEAD
=======
// Halaman Profile
>>>>>>> 3830aa6 (first commit)
Route::get('/profile', function () {
    return view('profile.index');
});

<<<<<<< HEAD
Route::get('/ebooks', function () {
    return view('ebooks.index');
});

=======
// Halaman E-Books (Rute buatanmu sebelumnya)
Route::get('/ebooks', [EbookController::class, 'index']);

// Rute lainnya dari frontend
>>>>>>> 3830aa6 (first commit)
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
<<<<<<< HEAD
});
=======
});

// Rute untuk mengetes fitur Open Library API
Route::get('/cek-buku', [EbookController::class, 'cekBukuDariInternet']);
>>>>>>> 3830aa6 (first commit)
