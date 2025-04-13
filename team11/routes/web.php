<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\GambarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [KegiatanController::class, 'index'])->name('dashboard');
//     Route::get('/kegiatan/{id}', [KegiatanController::class, 'show']);
//     Route::post('/daftar/{id}', [PendaftaranController::class, 'daftar']);
//     Route::get('/riwayat', [PendaftaranController::class, 'riwayat']);
// });
Route::get('/dashboard', [KegiatanController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', [PendaftaranController::class, 'index'])->name('dashboard');
    Route::post('/daftar', [PendaftaranController::class, 'daftar'])->name('daftar');
    Route::get('/riwayat', [PendaftaranController::class, 'riwayat'])->name('riwayat');
});
Route::post('/daftar', [PendaftaranController::class, 'daftar'])->name('daftar')->middleware('auth');
Route::post('/daftar', [PendaftaranController::class, 'daftar'])->name('daftar');
Route::get('/pendaftaran/{id}', [PendaftaranController::class, 'showForm'])->name('pendaftaran.form');
Route::post('/pendaftaran', [PendaftaranController::class, 'daftar'])->name('daftar');
Route::post('/upload-gambar', [GambarController::class, 'upload'])->name('gambar.upload');



