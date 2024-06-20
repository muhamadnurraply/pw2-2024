<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Buat route kabar dengan view kondisi
Route::get('/kabar', function () {
    return view('kondisi');
});

// Buat route nilai dengan view nilai
// Route::get('/nilai', function () {
//     return view('nilai');
// });

// Buat route ke pasien dengan view pasien
Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/admin', [AdminController::class, 'index']);
// pasien
Route::get('/admin/pasien', [PasienController::class, 'index'])->name('pasiens.index');
Route::get('/admin/pasien/create', [PasienController::class, 'create'])->name('pasiens.create');
Route::post('/admin/pasien/store', [PasienController::class, 'store'])->name('pasiens.store');
Route::get('/admin/pasien/{pasien}', [PasienController::class, 'show'])->name('pasiens.show');
Route::get('/admin/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasiens.edit');
Route::put('/admin/pasien/{pasien}', [PasienController::class, 'update'])->name('pasiens.update');
Route::delete('/admin/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasiens.destroy');

Route::get('/page', function () {
    return view('page');
});