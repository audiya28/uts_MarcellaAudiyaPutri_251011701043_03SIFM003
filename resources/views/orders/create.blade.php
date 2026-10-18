@extends('layouts.app')

@section('title', 'Pembelian | BLACKPINK Digital Art Gallery')

@section('content')

<style>
    .purchase-card {
        background: #171717;
        border: 1px solid #383838;
        border-radius: 10px;
        padding: 25px;
        height: 100%;
    }

    .purchase-image {
        width: 100%;
        height: 240px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .purchase-title {
        color: #fff;
        font-size: 22px;
        font-weight: 700;
    }

    .purchase-price {
        color: #ff69b4;
        font-size: 23px;
        font-weight: 800;
    }

    .purchase-label {
        display: block;
        color: #fff;
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .purchase-input {
        width: 100%;
        padding: 11px 12px;
        background: #222;
        color: #fff;
        border: 1px solid #444;
        border-radius: 7px;
    }

    .purchase-input:focus {
        outline: none;
        border-color: #ff69b4;
    }

    .purchase-input::placeholder {
        color: #999;
    }

    .purchase-submit {
        width: 100%;
        padding: 12px;
        background: #ff69b4;
        color: #111;
        border: none;
        border-radius: 7px;
        font-weight: 700;
        cursor: pointer;
    }

    .purchase-submit:hover {
        background: #ff85c5;
    }

    .purchase-error {
        color: #ff9999;
        font-size: 12px;
        margin-top: 5px;
    }

    .purchase-back {
        display: inline-block;
        margin-top: 18px;
        color: #ff69b4;
        text-decoration: none;
        font-size: 13px;
    }
</style>

<section class="hero mb-5">
    <p class="eyebrow mb-3">Purchase Artwork</p>

    <h1 class="mb-3">Pembelian Lukisan</h1>

    <p class="fs-5 muted-text mb-0">
        Lengkapi data untuk membeli karya digital pilihanmu.
    </p>
</section>

<section class="mb-5">
    <div class="row g-4">

        {{-- INFORMASI LUKISAN --}}
        <div class="col-12 col-lg-5">
            <div class="purchase-card">

                <img
                    src="{{ asset('assets/images/' . $artwork->image) }}"
                    alt="{{ $artwork->title }}"
                    class="purchase-image"
                >

                <p class="eyebrow mb-2">Selected Artwork</p>

                <h2 class="purchase-title">
                    {{ $artwork->title }}
                </h2>

                <p class="muted-text">
                    Oleh {{ $artwork->artist }}
                </p>

                <p class="muted-text">
                    Resolusi: {{ $artwork->resolution }}
                </p>

                <p class="muted-text">
                    Software: {{ $artwork->software_used }}
                </p>

                <hr style="border-color: #444;">

                <p class="muted-text mb-1">Total Pembelian</p>

                <p class="purchase-price mb-0">
                    Rp{{ number_format($artwork->price, 0, ',', '.') }}
                </p>

            </div>
        </div>

        {{-- FORMULIR PEMBELIAN --}}
        <div class="col-12 col-lg-7">
            <div class="purchase-card">

                <h2 class="purchase-title mb-2">
                    Data Pembeli
                </h2>

                <p class="muted-text mb-4">
                    Isi formulir berikut dengan benar.
                </p>

                <form
                    action="{{ route('orders.store', $artwork->id) }}"
                    method="POST"
                >
                    @csrf

                    <div class="mb-3">
                        <label for="customer_name" class="purchase-label">
                            Nama Lengkap
                        </label>

                        <input
                            type="text"
                            id="customer_name"
                            name="customer_name"
                            class="purchase-input"
                            value="{{ old('customer_name') }}"
                            maxlength="100"
                            required
                        >

                        @error('customer_name')
                            <p class="purchase-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="customer_email" class="purchase-label">
                            Email
                        </label>

                        <input
                            type="email"
                            id="customer_email"
                            name="customer_email"
                            class="purchase-input"
                            value="{{ old('customer_email') }}"
                            maxlength="255"
                            required
                        >

                        @error('customer_email')
                            <p class="purchase-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="customer_phone" class="purchase-label">
                            Nomor WhatsApp
                        </label>

                        <input
                            type="tel"
                            id="customer_phone"
                            name="customer_phone"
                            class="purchase-input"
                            value="{{ old('customer_phone') }}"
                            maxlength="20"
                            placeholder="Contoh: 081234567890"
                            required
                        >

                        @error('customer_phone')
                            <p class="purchase-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="customer_address" class="purchase-label">
                            Alamat
                        </label>

                        <textarea
                            id="customer_address"
                            name="customer_address"
                            class="purchase-input"
                            rows="4"
                            maxlength="1000"
                            required
                        >{{ old('customer_address') }}</textarea>

                        @error('customer_address')
                            <p class="purchase-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="purchase-submit">
                        Konfirmasi Pembelian
                    </button>
                </form>

                <a
                    href="{{ route('digital-art.show', $artwork->id) }}"
                    class="purchase-back"
                >
                    &larr; Kembali ke Detail Produk
                </a>

            </div>
        </div>

    </div>
</section>

@endsection
