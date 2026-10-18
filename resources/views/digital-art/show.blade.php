
@extends('layouts.app')

@section('title', 'Detail Produk | BLACKPINK Digital Art Gallery')

@section('content')


{{-- DETAIL PRODUK --}}
<section class="art-card p-3 p-lg-4 mb-4">
    <div class="row align-items-center g-4">

        {{-- GAMBAR PRODUK --}}
        <div class="col-lg-6">
            <div class="detail-image-wrapper">
                <img
                    src="{{ asset('assets/images/' . $artwork->image) }}"
                    alt="{{ $artwork->title }}"
                    class="detail-image"
                >
            </div>
        </div>

        {{-- INFORMASI PRODUK --}}
        <div class="col-lg-6 p-lg-3">

            <p class="eyebrow mb-3">
                Detail Karya Digital
            </p>

            <h1 class="fw-bold mb-2">
                {{ $artwork->title }}
            </h1>

            <p class="muted-text mb-4">
                Oleh {{ $artwork->artist }}
            </p>

            <h2 class="price mb-4">
                Rp{{ number_format($artwork->price, 0, ',', '.') }}
            </h2>

            <p class="muted-text mb-4">
                Karya seni digital pilihan dari
                BLACKPINK Digital Art Gallery.
                Temukan detail teknis karya berikut.
            </p>

            <hr style="border-color: #444;">

            {{-- RESOLUSI --}}
            <div class="detail-info mb-3">
                <p class="detail-label mb-1">
                    Resolusi gambar
                </p>

                <p class="mb-0">
                    {{ $artwork->resolution }}
                </p>
            </div>

            {{-- SOFTWARE --}}
            <div class="detail-info mb-4">
                <p class="detail-label mb-1">
                    Software yang digunakan
                </p>

                <p class="mb-0">
                    {{ $artwork->software_used }}
                </p>
            </div>

            {{-- TOMBOL KEMBALI --}}
            <a href="{{ route('produk') }}"
               class="btn btn-pink rounded-pill px-4 py-2">
                &larr; Kembali ke Produk
            </a>

            {{-- PEMBELIAN --}}
            <a href="{{ route('orders.create', $artwork->id) }}"
               class="btn btn-pink rounded-pill px-4 py-2 mt-2">
                Beli Sekarang
            </a>

        </div>

    </div>
</section>

@endsection

{{-- CSS KHUSUS DETAIL PRODUK --}}
@push('styles')
<style>
    .back-link {
        display: inline-block;
        color: #ff69b4;
        text-decoration: none;
        font-size: 14px;
        transition: color 0.2s ease;
    }

    .back-link:hover {
        color: #ff9bce;
    }

    .detail-image-wrapper {
        width: 100%;
        min-height: 300px;
        max-height: 550px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        background: #171717;
        border: 1px solid #383838;
        border-radius: 12px;
    }

    .detail-image {
        display: block;
        width: 100%;
        max-height: 550px;
        object-fit: contain;
        border-radius: 12px;
    }

    .detail-info {
        padding: 12px 14px;
        background: rgba(255, 105, 180, 0.04);
        border: 1px solid #383838;
        border-radius: 8px;
    }

    .detail-label {
        color: #ff69b4;
        font-size: 13px;
        font-weight: 700;
    }

    @media (max-width: 576px) {
        .detail-image-wrapper {
            min-height: 220px;
        }

        .detail-image {
            max-height: 350px;
        }
    }
</style>
@endpush
