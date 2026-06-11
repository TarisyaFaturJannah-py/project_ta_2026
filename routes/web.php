<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/profile', function () {
    return view('profile.index');
});

Route::get('/ebooks', function () {
    return view('ebooks.index');
});

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