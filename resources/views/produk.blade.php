@extends('layouts.app')

@section('title', 'Produk | BLACKPINK Digital Art Gallery')

@section('content')

<section class="hero mb-5">
    <p class="eyebrow mb-3">Our Collection</p>

    <h1 class="mb-3">Produk Kami</h1>

    <p class="fs-5 muted-text mb-0">
        Temukan koleksi lukisan digital BLACKPINK Digital Art Gallery.
    </p>
</section>

<section class="mb-5" id="koleksi">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="eyebrow mb-2">Digital Art Collection</p>
            <h2 class="section-title mb-0">Koleksi Lukisan</h2>
        </div>

        <span class="product-count">
            {{ $artworks->total() }} Karya
        </span>
    </div>

    <div class="row g-4">

        @forelse ($artworks as $artwork)

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="product-card h-100">

                    {{-- GAMBAR PRODUK --}}
                    <div class="product-image-wrapper">
                        <img
                            src="{{ asset('assets/images/' . $artwork->image) }}"
                            alt="{{ $artwork->title }}"
                            class="product-image"
                            loading="lazy"
                        >
                    </div>

                    {{-- INFORMASI PRODUK --}}
                    <div class="product-content">

                        <p class="product-artist mb-2">
                            Oleh {{ $artwork->artist }}
                        </p>

                        <h3 class="product-title">
                            {{ $artwork->title }}
                        </h3>

                        <p class="product-description">
                            Resolusi: {{ $artwork->resolution }}
                        </p>

                        <p class="product-description">
                            Software: {{ $artwork->software_used }}
                        </p>

                        <p class="product-price">
                            Rp{{ number_format($artwork->price, 0, ',', '.') }}
                        </p>

                        {{-- TOMBOL DETAIL --}}
                        <a
                            href="{{ route('digital-art.show', $artwork->id) }}"
                            class="product-detail-link"
                        >
                            Lihat Detail &rarr;
                        </a>

                    </div>
                </div>
            </div>

        @empty

            <div class="col-12">
                <div class="art-card p-4">
                    <p class="muted-text mb-0">
                        Belum ada produk yang tersedia.
                    </p>
                </div>
            </div>

        @endforelse

    </div>

    {{-- PAGINATION TANPA TULISAN JUMLAH HASIL --}}
    @if ($artworks->hasPages())
        <div class="product-pagination mt-4">

            <nav aria-label="Navigasi halaman produk">
                <ul class="pagination justify-content-center">

                    {{-- TOMBOL SEBELUMNYA --}}
                    @if ($artworks->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&laquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a
                                class="page-link"
                                href="{{ $artworks->previousPageUrl() }}#koleksi"
                                aria-label="Halaman sebelumnya"
                            >
                                &laquo;
                            </a>
                        </li>
                    @endif

                    {{-- NOMOR HALAMAN --}}
                    @foreach ($artworks->getUrlRange(1, $artworks->lastPage()) as $page => $url)
                        <li class="page-item {{ $artworks->currentPage() == $page ? 'active' : '' }}">

                            @if ($artworks->currentPage() == $page)
                                <span class="page-link">
                                    {{ $page }}
                                </span>
                            @else
                                <a
                                    class="page-link"
                                    href="{{ $url }}#koleksi"
                                >
                                    {{ $page }}
                                </a>
                            @endif

                        </li>
                    @endforeach

                    {{-- TOMBOL BERIKUTNYA --}}
                    @if ($artworks->hasMorePages())
                        <li class="page-item">
                            <a
                                class="page-link"
                                href="{{ $artworks->nextPageUrl() }}#koleksi"
                                aria-label="Halaman berikutnya"
                            >
                                &raquo;
                            </a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link">&raquo;</span>
                        </li>
                    @endif

                </ul>
            </nav>

        </div>
    @endif

</section>

@endsection

<style>
    .product-count {
        color: #ff69b4;
        background: rgba(255, 105, 180, 0.08);
        border: 1px solid rgba(255, 105, 180, 0.4);
        padding: 8px 14px;
        border-radius: 25px;
        font-size: 12px;
        font-weight: 700;
        white-space: nowrap;
    }

    .product-card {
        width: 100%;
        min-width: 0;
        height: 100%;
        background: #171717;
        border: 1px solid #383838;
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.25s ease,
                    border-color 0.25s ease;
    }

    .product-card:hover {
        transform: translateY(-4px);
        border-color: #ff69b4;
    }

    .product-image-wrapper {
        width: 100%;
        height: 190px;
        overflow: hidden;
        background: #222;
    }

    .product-image {
        display: block;
        width: 100%;
        height: 100%;
        max-width: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .product-card:hover .product-image {
        transform: scale(1.04);
    }

    .product-content {
        padding: 17px;
        overflow-wrap: anywhere;
    }

    .product-artist {
        color: #ff69b4;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .product-title {
        color: #fff;
        font-size: 17px;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .product-description {
        color: #bdbdbd;
        font-size: 12px;
        line-height: 1.6;
        margin-bottom: 8px;
    }

    .product-price {
        color: #ff69b4;
        font-size: 16px;
        font-weight: 800;
        margin: 14px 0;
    }

    .product-detail-link {
        display: block;
        text-align: center;
        color: #ddd;
        text-decoration: none;
        font-size: 12px;
        padding: 10px 6px;
        border-top: 1px solid #383838;
        transition: color 0.2s ease;
    }

    .product-detail-link:hover {
        color: #ff69b4;
    }

    /* PAGINATION */
    .product-pagination .pagination {
        justify-content: center;
        gap: 6px;
        margin-bottom: 0;
    }

    .product-pagination .page-link {
        background: #171717;
        border: 1px solid #444;
        color: #ff69b4;
        border-radius: 8px;
        font-size: 13px;
        text-decoration: none;
    }

    .product-pagination .page-item.active .page-link {
        background: #ff69b4;
        border-color: #ff69b4;
        color: #111;
    }

    .product-pagination .page-item.disabled .page-link {
        background: #111;
        color: #666;
    }

    .product-pagination .page-link:hover {
        background: rgba(255, 105, 180, 0.15);
        border-color: #ff69b4;
        color: #ff69b4;
    }

    .product-pagination .page-item.active .page-link:hover {
        background: #ff69b4;
        color: #111;
    }

    @media (max-width: 576px) {
        .product-image-wrapper {
            height: 220px;
        }

        .product-content {
            padding: 15px;
        }
    }
</style>
