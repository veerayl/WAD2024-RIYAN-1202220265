<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

// Redirect dari root ke halaman dosen
// Route::get('/', function () {
//     return redirect()->route('dashboard');
// });
Route::get('/', [DosenController::class, 'index'])->name('index'); // Menampilkan semua dosen

// Routing untuk modul Manajemen Data Dosen
Route::prefix('dosen')->name('dosen.')->group(function () {
    Route::get('/', [DosenController::class, 'index'])->name('index'); // Menampilkan semua dosen
    Route::get('/create', [DosenController::class, 'create'])->name('create'); // Menampilkan form tambah dosen
    Route::post('/store', [DosenController::class, 'store'])->name('store'); // Menyimpan data dosen
    Route::get('/{dosen}/edit', [DosenController::class, 'edit'])->name('edit'); // Menampilkan form edit dosen
    Route::put('/{dosen}', [DosenController::class, 'update'])->name('update'); // Memperbarui data dosen
    Route::delete('/{dosen}', [DosenController::class, 'destroy'])->name('destroy'); // Menghapus data dosen
});

// Routing untuk modul Manajemen Data Mahasiswa
Route::prefix('mahasiswa')->name('mahasiswa.')->group(function () {
    Route::get('/', [MahasiswaController::class, 'index'])->name('index'); // Menampilkan semua mahasiswa
    Route::get('/create', [MahasiswaController::class, 'create'])->name('create'); // Menampilkan form tambah mahasiswa
    Route::post('/store', [MahasiswaController::class, 'store'])->name('store'); // Menyimpan data mahasiswa
    Route::get('/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('edit'); // Menampilkan form edit mahasiswa
    Route::put('/{mahasiswa}', [MahasiswaController::class, 'update'])->name('update'); // Memperbarui data mahasiswa
    Route::delete('/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('destroy'); // Menghapus data mahasiswa
});
