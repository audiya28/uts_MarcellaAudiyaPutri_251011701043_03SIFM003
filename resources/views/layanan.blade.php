@extends('layouts.app')

@section('title', 'Layanan Kami | BLACKPINK Digital Art Gallery')

@section('content')

{{-- HERO SECTION --}}
<section class="hero mb-5">
    <p class="eyebrow mb-3">Our Services</p>

    <h1 class="mb-3">Layanan Kami</h1>

    <p class="fs-5 muted-text mb-0">
        Jelajahi layanan BLACKPINK Digital Art Gallery,
        ruang untuk mengenal dan menikmati karya seni digital
        dengan tampilan modern dan informatif.
    </p>
</section>

{{-- TENTANG LAYANAN --}}
<section class="art-card p-4 p-lg-5 mb-4">
    <h2 class="section-title mb-3">
        Apa yang Kami Tawarkan?
    </h2>

    <p class="muted-text mb-0">
        BLACKPINK Digital Art Gallery menyediakan halaman galeri
        yang menampilkan berbagai karya seni digital beserta
        informasi mengenai judul karya, seniman, harga, resolusi,
        dan software yang digunakan. Kami menghadirkan pengalaman
        menjelajahi karya seni melalui tampilan yang terstruktur,
        nyaman, dan mudah digunakan.
    </p>
</section>

{{-- DAFTAR LAYANAN --}}
<section class="mb-5">

    <div class="mb-4">
        <p class="eyebrow mb-2">What We Provide</p>

        <h2 class="section-title">
            Layanan Galeri
        </h2>
    </div>

    <div class="row g-4">

        {{-- LAYANAN 1 --}}
        <div class="col-md-6 col-lg-4">
            <div class="info-card service-card h-100">

                <div class="service-icon mb-3">
                    <span>🎨</span>
                </div>

                <h3>Galeri Seni Digital</h3>

                <p class="muted-text mb-0">
                    Menampilkan koleksi karya seni digital
                    dengan visual yang menarik agar pengunjung
                    dapat menjelajahi berbagai karya.
                </p>

            </div>
        </div>

        {{-- LAYANAN 2 --}}
        <div class="col-md-6 col-lg-4">
            <div class="info-card service-card h-100">

                <div class="service-icon mb-3">
                    <span>🖼️</span>
                </div>

                <h3>Informasi Detail Karya</h3>

                <p class="muted-text mb-0">
                    Menyediakan informasi mengenai judul lukisan,
                    nama seniman, resolusi gambar, harga,
                    dan software yang digunakan.
                </p>

            </div>
        </div>

        {{-- LAYANAN 3 --}}
        <div class="col-md-6 col-lg-4">
            <div class="info-card service-card h-100">

                <div class="service-icon mb-3">
                    <span>💻</span>
                </div>

                <h3>Eksplorasi Karya</h3>

                <p class="muted-text mb-0">
                    Memudahkan pengunjung menjelajahi koleksi
                    seni digital melalui navigasi website
                    yang sederhana dan terstruktur.
                </p>

            </div>
        </div>

        {{-- LAYANAN 4 --}}
        <div class="col-md-6 col-lg-4">
            <div class="info-card service-card h-100">

                <div class="service-icon mb-3">
                    <span>🌸</span>
                </div>

                <h3>Desain Visual Modern</h3>

                <p class="muted-text mb-0">
                    Menggunakan perpaduan warna hitam dan pink
                    untuk menghadirkan identitas visual galeri
                    yang konsisten dan mudah dikenali.
                </p>

            </div>
        </div>

        {{-- LAYANAN 5 --}}
        <div class="col-md-6 col-lg-4">
            <div class="info-card service-card h-100">

                <div class="service-icon mb-3">
                    <span>📱</span>
                </div>

                <h3>Tampilan Responsif</h3>

                <p class="muted-text mb-0">
                    Menggunakan layout Bootstrap agar halaman
                    galeri lebih nyaman diakses melalui
                    komputer maupun perangkat seluler.
                </p>

            </div>
        </div>

        {{-- LAYANAN 6 --}}
        <div class="col-md-6 col-lg-4">
            <div class="info-card service-card h-100">

                <div class="service-icon mb-3">
                    <span>✨</span>
                </div>

                <h3>Pengalaman Menjelajah</h3>

                <p class="muted-text mb-0">
                    Menyajikan susunan informasi yang jelas
                    sehingga pengunjung dapat mengenal
                    karakteristik setiap karya dengan mudah.
                </p>

            </div>
        </div>

    </div>
</section>

{{-- BAGIAN PENUTUP --}}
<section class="art-card service-cta p-4 p-lg-5 mb-4 text-center">

    <p class="eyebrow mb-3">
        Discover Digital Art
    </p>

    <h2 class="section-title mb-3">
        Temukan Karya Favoritmu
    </h2>

    <p class="muted-text mb-4">
        Jelajahi koleksi BLACKPINK Digital Art Gallery
        dan temukan berbagai karya seni digital yang menarik.
    </p>

    {{-- MENUJU PRODUK --}}
    <a href="{{ url('/produk') }}"
        class="btn btn-pink rounded-pill px-4 py-2">
        Jelajahi Galeri &rarr;
    </a>

</section>

@endsection

{{-- CSS KHUSUS HALAMAN LAYANAN --}}
@push('styles')
<style>
    .service-card {
        padding: 24px;
        border-radius: 12px;
        transition: transform 0.25s ease,
                    border-color 0.25s ease,
                    box-shadow 0.25s ease;
    }

    .service-card h3 {
        color: #ff69b4;
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .service-card:hover {
        transform: translateY(-5px);
        border-color: rgba(255, 105, 180, 0.65);
        box-shadow: 0 8px 24px rgba(255, 105, 180, 0.08);
    }

    .service-icon {
        width: 64px;
        height: 64px;
        display: flex;
        align-items: center;
        justify-content: center;

        background: rgba(255, 105, 180, 0.10);
        border: 1px solid rgba(255, 105, 180, 0.45);
        border-radius: 16px;

        font-size: 30px;
    }

    .service-icon span {
        line-height: 1;
    }

    .service-cta {
        background: linear-gradient(
            120deg,
            rgba(255, 105, 180, 0.04),
            rgba(255, 20, 147, 0.13)
        );
    }

    @media (max-width: 576px) {
        .service-card {
            padding: 20px;
        }

        .service-icon {
            width: 54px;
            height: 54px;
            font-size: 26px;
        }
    }
</style>
@endpush
