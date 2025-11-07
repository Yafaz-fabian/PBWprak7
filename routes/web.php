<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController; // Import Controller Kategori

// =========================================================
// 1. ROUTE BERITA UTAMA (NewsController)
// =========================================================

// Route 1: Halaman Daftar Berita (Landing Page)
Route::get('/', [NewsController::class, 'index'])->name('news.index');

// Route 2: Halaman Detail Berita (menggunakan Route Model Binding)
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');


// =========================================================
// 2. ROUTE KATEGORI (CategoryController)
// =========================================================

// Route 3: Halaman Daftar Semua Kategori
// Akan menampilkan daftar kategori (Politik, Olahraga, dll.)
Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');

// Route 4: Halaman Detail Kategori
// Akan menampilkan semua berita dalam kategori tertentu
// {category:slug} menggunakan Route Model Binding berdasarkan kolom 'slug'
Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])->name('category.show');