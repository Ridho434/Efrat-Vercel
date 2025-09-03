<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');   // halaman utama
});

Route::get('/about', function () {
    return view('about');   // halaman about
});

Route::get('/portfolio', function () {
    return view('portfolio');   // halaman portfolio
});

Route::get('/achievement', function () {
    return view('achievement'); // halaman achievement
});

Route::get('/contact', function () {
    return view('contact');     // halaman contact
});
