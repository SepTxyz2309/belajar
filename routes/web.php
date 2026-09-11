<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Models\News;

// 1. ROUTE HALAMAN DEPAN (Index)
Route::get('/', function () {
    // Mengambil semua data berita dari database, diurutkan dari yang terbaru
    $news = News::latest()->get(); 
    // Mengirim data berita ke file index.blade.php
    return view('index', compact('news')); 
});

// 2. ROUTE LOGIN
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin']);
Route::post('/logout', [AuthController::class, 'logout']);

// 3. ROUTE ADMIN (Dikunci dengan Middleware 'auth')
Route::middleware('auth')->group(function () {
    Route::get('/admin/news/create', [NewsController::class, 'create']);
    Route::post('/admin/news', [NewsController::class, 'store']);
});