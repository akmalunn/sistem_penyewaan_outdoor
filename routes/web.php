<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    $title =  'dashboard';
    return view('dashboard', compact('title'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('kategori', [KategoriController::class, 'index'])->name('kategori.home');
    Route::get('kategori/tambah', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::put('kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('kategori/hapus/{id}', [KategoriController::class, 'destroy'])->name('kategori.delete');

    Route::get('barang', [BarangController::class, 'index'])->name('barang.home');
    Route::get('barang/tambah', [BarangController::class, 'create'])->name('barang.create');
    Route::post('barang/store', [BarangController::class, 'store'])->name('barang.store');
    Route::get('barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
    Route::put('barang/update/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('barang/hapus/{id}', [BarangController::class, 'destroy'])->name('barang.delete');

    Route::get('pelanggan', [PelangganController::class, 'index'])->name('pelanggan.home');
    Route::get('pelanggan/tambah', [PelangganController::class, 'create'])->name('pelanggan.create');
    Route::post('pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');
    Route::get('pelanggan/edit/{id}', [PelangganController::class, 'edit'])->name('pelanggan.edit');
    Route::put('pelanggan/update/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
    Route::delete('pelanggan/hapus/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.delete');
});

require __DIR__ . '/auth.php';
