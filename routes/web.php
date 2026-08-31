<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/welcome', function () {
    return view('welcome'); // Mengambil file resources/views/welcome.blade.php
});
Route::get('/sport', function () {
    return view('sport'); // Mengambil file resources/views/sport.blade.php
});