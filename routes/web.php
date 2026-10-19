<?php

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

