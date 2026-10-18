
@extends('layouts.app')

@section('title', 'Profil | BLACKPINK Digital Art Gallery')

@section('content')

<section class="hero mb-5">
    <p class="eyebrow mb-3">About Our Gallery</p>

    <h1 class="mb-3">Profil Galeri</h1>

    <p class="fs-5 muted-text mb-0">
        Mengenal lebih dekat BLACKPINK Digital Art Gallery,
        ruang untuk menjelajahi kreativitas dan karya seni digital.
    </p>
</section>

<section class="art-card p-4 p-lg-5 mb-4">
    <h2 class="section-title mb-3">Tentang Kami</h2>

    <p class="muted-text">
        BLACKPINK Digital Art Gallery merupakan website galeri seni
        digital dengan desain modern yang memadukan warna hitam dan
        pink. Website ini dirancang untuk menampilkan karya seni
        digital beserta informasi yang berkaitan dengan setiap karya.
    </p>

    <p class="muted-text mb-0">
        Melalui galeri ini, pengunjung dapat mengenal judul karya,
        nama seniman, resolusi gambar, harga, serta software yang
        digunakan untuk membuat karya tersebut.
    </p>
</section>

<section class="row g-4 mb-4">

    <div class="col-md-6">
        <div class="info-card">
            <h3>Visi</h3>

            <p class="muted-text mb-0">
                Menjadi ruang digital yang menyajikan karya seni
                secara menarik, informatif, dan mudah dijelajahi.
            </p>
        </div>
    </div>

    <div class="col-md-6">
        <div class="info-card">
            <h3>Misi</h3>

            <p class="muted-text mb-0">
                Menyediakan informasi karya seni digital dalam
                tampilan yang terstruktur, responsif, dan nyaman
                digunakan oleh pengunjung.
            </p>
        </div>
    </div>

</section>

<div class="d-flex justify-content-between align-items-center gap-3 mb-4 flex-wrap">

    <a href="{{ route('digital-art.index') }}"
       class="btn btn-pink rounded-pill px-4 py-2">
        Kembali ke Home
    </a>

    <a href="{{ url('/layanan') }}"
       class="btn btn-pink rounded-pill px-4 py-2">
        Lihat Layanan Kami &rarr;
    </a>

</div>

@endsection
