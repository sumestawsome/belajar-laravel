<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

// 1. Endpoint publik: bisa diakses bebas tanpa token login
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// 2. Etalase publik: siapa saja boleh lihat katalog dan detail produk
Route::apiResource('products', ProductController::class)->only(['index', 'show']);

// 3. Endpoint privat: wajib bawa token login Sanctum di header Authorization
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/logout', [AuthController::class, 'logout']);

    // Tambah, ubah, dan hapus produk dikunci khusus user yang sudah login
    Route::apiResource('products', ProductController::class)->except(['index', 'show']);
});