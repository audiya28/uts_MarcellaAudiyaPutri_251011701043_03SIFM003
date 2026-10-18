
@extends('layouts.app')

@section('title', 'Home | BLACKPINK Digital Art Gallery')

@section('content')

<!-- ==================== HERO ==================== -->
<section class="hero mb-5">
    <div class="row align-items-center g-4">

        <div class="col-lg-7">
            <p class="eyebrow mb-3">
                Welcome to Our Gallery
            </p>

            <h1 class="mb-3">
                Born Pink.<br>
                Create Bold.
            </h1>

            <p class="fs-5 muted-text mb-4">
                Temukan keindahan seni digital melalui warna,
                kreativitas, dan imajinasi. Jelajahi dunia seni
                dengan gaya yang berani dan elegan.
            </p>

          <a href="{{ route('digital-art.profil') }}"
             class="btn btn-pink rounded-pill px-4 py-3">
             Kenali Galeri Kami
           </a>
        </div>

        <div class="col-lg-5">
            <img
                src="https://images.unsplash.com/photo-1549490349-8643362247b5?auto=format&fit=crop&w=1000&q=80"
                alt="Lukisan abstrak digital"
                class="hero-image"
            >
        </div>

    </div>
</section>


<!-- ==================== PROFIL ==================== -->
<section id="profil" class="mb-5 py-4">

    <div class="row align-items-center g-4">

        <div class="col-lg-5">
            <p class="eyebrow mb-2">
                About Our Gallery
            </p>

            <h2 class="section-title mb-3">
                Profil Galeri
            </h2>
        </div>

        <div class="col-lg-7">
            <p class="muted-text mb-3">
                BLACKPINK Digital Art Gallery adalah website galeri
                seni digital yang dirancang dengan perpaduan warna
                hitam dan pink untuk menciptakan tampilan modern,
                elegan, dan berkarakter.
            </p>

            <p class="muted-text mb-0">
                Website ini dirancang untuk menampilkan karya seni
                digital beserta informasi judul, seniman, resolusi,
                harga, dan software yang digunakan. Setiap karya
                memiliki cerita dan kreativitas tersendiri.
            </p>
        </div>

    </div>

</section>


<!-- ==================== LAYANAN ==================== -->
<section id="layanan" class="mb-5 py-4">

    <div class="text-center mb-4">
        <p class="eyebrow mb-2">
            What We Offer
        </p>

        <h2 class="section-title">
            Jelajahi Dunia Seni
        </h2>

        <p class="muted-text">
            Kenali fitur yang tersedia di galeri digital kami.
        </p>
    </div>

    <div class="row g-4">

        <!-- LAYANAN 1 -->
        <div class="col-md-4">
            <div class="info-card">
                <div class="mb-3">
                    <span style="font-size: 2rem; color: #ff69b4;">
                        &#10022;
                    </span>
                </div>

                <h3>Koleksi Seni</h3>

                <p class="muted-text mb-0">
                    Temukan berbagai karya seni digital dengan
                    gaya visual, komposisi, dan warna yang unik.
                </p>
            </div>
        </div>

        <!-- LAYANAN 2 -->
        <div class="col-md-4">
            <div class="info-card">
                <div class="mb-3">
                    <span style="font-size: 2rem; color: #ff69b4;">
                        &#9825;
                    </span>
                </div>

                <h3>Profil Seniman</h3>

                <p class="muted-text mb-0">
                    Ketahui informasi seniman yang berada
                    di balik kreativitas setiap karya.
                </p>
            </div>
        </div>

        <!-- LAYANAN 3 -->
        <div class="col-md-4">
            <div class="info-card">
                <div class="mb-3">
                    <span style="font-size: 2rem; color: #ff69b4;">
                        &#10004;
                    </span>
                </div>

                <h3>Informasi Karya</h3>

                <p class="muted-text mb-0">
                    Dapatkan informasi tentang resolusi gambar,
                    software, dan harga setiap karya digital.
                </p>
            </div>
        </div>

    </div>

</section>


<!-- ==================== PENUTUP HOME ==================== -->
<section class="text-center py-5 mb-3"
         style="background: linear-gradient(135deg, #171717, #351426);
                border: 1px solid #602345;
                border-radius: 20px;">

    <p class="eyebrow mb-2">
        Explore Your Creativity
    </p>

    <h2 class="section-title mb-3">
        Art Has No Limits.
    </h2>

    <p class="muted-text mb-0">
        Setiap karya memiliki warna, makna, dan cerita.
    </p>

</section>

@endsection
