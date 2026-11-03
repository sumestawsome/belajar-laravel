<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Helper untuk membuat symlink storage di server hosting (akses: GET /buat-symlink-storage)
Route::get('/buat-symlink-storage', function () {
    try {
        Artisan::call('storage:link');
        return response()->json([
            'status' => 'success',
            'message' => 'Symlink storage berhasil dibuat!'
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage()
        ], 500);
    }
});