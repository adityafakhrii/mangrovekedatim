<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArtikelController;

Route::get('/', [PageController::class, 'index']);
Route::get('/tentang', [PageController::class, 'tentang']);
Route::get('/sejarah', [PageController::class, 'sejarah']);
Route::get('/fasilitas', [PageController::class, 'fasilitas']);
// Route::get('/artikel', [PageController::class, 'artikel']);
Route::get('/kontak', [PageController::class, 'kontak']);
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikels.index');
Route::get('/artikel/{artikel:slug}', [ArtikelController::class, 'show'])->name('artikels.show');
