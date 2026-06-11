<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/ebooks', function () {
    return view('ebooks.index');
});

Route::get('/ebooks/create', function () {
    return view('ebooks.create');
});

Route::get('/categories', function () {
    return view('categories.index');
});