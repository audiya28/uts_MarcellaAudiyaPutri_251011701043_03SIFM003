<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Models\DigitalArt;

// Halaman utama
Route::view('/', 'digital-art.index')
    ->name('digital-art.index');

// Halaman detail produk dari database
Route::get('/digital-art/{id}', function (int $id) {
    $artwork = DigitalArt::findOrFail($id);

    return view('digital-art.show', compact('artwork'));
})
    ->whereNumber('id')
    ->name('digital-art.show');

// Halaman profil
Route::view('/profil', 'digital-art.profil')
    ->name('digital-art.profil');

// Halaman layanan
Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');

// Halaman produk dengan pagination
Route::get('/produk', function () {
    $artworks = DigitalArt::orderBy('id')->paginate(5);

    return view('produk', compact('artworks'));
})->name('produk');

// Formulir pembelian
Route::get('/beli/{id}', [OrderController::class, 'create'])
    ->whereNumber('id')
    ->name('orders.create');

// Menyimpan pembelian
Route::post('/beli/{id}', [OrderController::class, 'store'])
    ->whereNumber('id')
    ->name('orders.store');

// Riwayat pembelian
Route::get('/riwayat-pembelian', [OrderController::class, 'history'])
    ->name('orders.history');