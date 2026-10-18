@extends('layouts.app')

@section('title', 'Riwayat Pembelian | BLACKPINK Digital Art Gallery')

@section('content')

<style>
    .history-card {
        background: #171717;
        border: 1px solid #383838;
        border-radius: 10px;
        padding: 24px;
    }

    .history-title {
        color: #fff;
        font-size: 24px;
        font-weight: 700;
    }

    .history-subtitle {
        color: #bbb;
        font-size: 13px;
    }

    .history-count {
        color: #ff69b4;
        background: #292029;
        border: 1px solid #65425a;
        border-radius: 6px;
        padding: 8px 12px;
        font-size: 12px;
        white-space: nowrap;
    }

    .history-table-wrapper {
        overflow-x: auto;
        margin-top: 24px;
    }

    .history-table {
        width: 100%;
        min-width: 800px;
        border-collapse: collapse;
        color: #ddd;
    }

    .history-table th {
        background: #252525;
        color: #ff69b4;
        text-align: left;
        padding: 14px 12px;
        font-size: 12px;
        border-bottom: 1px solid #444;
        white-space: nowrap;
    }

    .history-table td {
        padding: 14px 12px;
        font-size: 12px;
        border-bottom: 1px solid #333;
        vertical-align: middle;
    }

    .history-table tbody tr:hover {
        background: #202020;
    }

    .history-price {
        color: #ff69b4;
        font-weight: 700;
        white-space: nowrap;
    }

    .history-status {
        display: inline-block;
        background: #292029;
        border: 1px solid #65425a;
        color: #ff99cc;
        padding: 6px 9px;
        border-radius: 5px;
        font-size: 11px;
        white-space: nowrap;
    }

    .history-detail-button {
        background: transparent;
        border: 1px solid #ff69b4;
        border-radius: 6px;
        padding: 7px 10px;
        color: #ff69b4;
        font-size: 11px;
        cursor: pointer;
    }

    .history-detail-button:hover {
        background: #ff69b4;
        color: #111;
    }

    .history-detail {
        background: #202020;
        border: 1px solid #383838;
        border-radius: 8px;
        padding: 18px;
    }

    .history-detail h3 {
        color: #ff69b4;
        font-size: 16px;
        font-weight: 700;
    }

    .history-detail p {
        color: #ddd;
        font-size: 13px;
        overflow-wrap: anywhere;
    }

    .history-detail img {
        width: 100%;
        max-width: 180px;
        height: 130px;
        object-fit: cover;
        border-radius: 7px;
    }

    .history-alert {
        background: #292029;
        border: 1px solid #65425a;
        border-radius: 8px;
        padding: 14px;
        color: #ffb5da;
        font-size: 13px;
        margin-bottom: 20px;
    }

    .history-back {
        display: inline-block;
        background: #ff69b4;
        color: #111;
        padding: 11px 20px;
        border-radius: 7px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 700;
        margin-top: 24px;
    }

    .history-back:hover {
        background: #ff85c5;
        color: #111;
    }

    .history-pagination .pagination {
        justify-content: center;
        gap: 5px;
    }

    .history-pagination .page-link {
        background: #171717;
        border-color: #444;
        color: #ff69b4;
    }

    .history-pagination .page-item.active .page-link {
        background: #ff69b4;
        border-color: #ff69b4;
        color: #111;
    }

    @media (max-width: 576px) {
        .history-card {
            padding: 14px;
        }

        .history-title {
            font-size: 20px;
        }
    }
</style>

{{-- JUDUL HALAMAN --}}
<section class="hero mb-5">
    <p class="eyebrow mb-3">Purchase History</p>

    <h1 class="mb-3">Riwayat Pembelian</h1>

    <p class="fs-5 muted-text mb-0">
        Daftar pembelian karya digital BLACKPINK Digital Art Gallery.
    </p>
</section>

<section class="mb-5">

    {{-- NOTIFIKASI PEMBELIAN --}}
    @if (session('success'))
        <div class="history-alert">
            &#10003; {{ session('success') }}
        </div>
    @endif

    <div class="history-card">

        <div class="d-flex justify-content-between align-items-center gap-3 flex-wrap">
            <div>
                <p class="eyebrow mb-2">Customer Orders</p>

                <h2 class="history-title mb-2">
                    Daftar Pembelian
                </h2>

                <p class="history-subtitle mb-0">
                    Semua pesanan yang tersimpan dalam sistem.
                </p>
            </div>

            <span class="history-count">
                {{ $orders->total() }} Pesanan
            </span>
        </div>

        {{-- TABEL PEMBELIAN --}}
        <div class="history-table-wrapper">
            <table class="history-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pembeli</th>
                        <th>Judul Lukisan</th>
                        <th>Harga</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($orders as $order)
                        <tr>
                            <td>
                                {{ $orders->firstItem() + $loop->index }}
                            </td>

                            <td>
                                {{ $order->customer_name }}
                            </td>

                            <td>
                                {{ $order->artwork?->title ?? 'Karya tidak tersedia' }}
                            </td>

                            <td class="history-price">
                                Rp{{ number_format($order->total_price, 0, ',', '.') }}
                            </td>

                            <td>
                                {{ $order->created_at?->format('d/m/Y H:i') ?? '-' }}
                            </td>

                            <td>
                                <span class="history-status">
                                    @switch($order->status)
                                        @case('pending')
                                            Menunggu Konfirmasi
                                            @break

                                        @case('completed')
                                            Selesai
                                            @break

                                        @case('cancelled')
                                            Dibatalkan
                                            @break

                                        @default
                                            {{ ucfirst($order->status) }}
                                    @endswitch
                                </span>
                            </td>

                            <td>
                                <button
                                    type="button"
                                    class="history-detail-button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#order-detail-{{ $order->id }}"
                                    aria-expanded="false"
                                    aria-controls="order-detail-{{ $order->id }}"
                                >
                                    Lihat Detail
                                </button>
                            </td>
                        </tr>

                        {{-- DETAIL PESANAN --}}
                        <tr>
                            <td colspan="7" style="padding: 0;">
                                <div
                                    class="collapse"
                                    id="order-detail-{{ $order->id }}"
                                >
                                    <div class="history-detail m-2">
                                        <h3 class="mb-3">
                                            Detail Pembelian #{{ $order->id }}
                                        </h3>

                                        <div class="row g-3 align-items-start">
                                            <div class="col-12 col-md-3">
                                                @if ($order->artwork)
                                                    <img
                                                        src="{{ asset('assets/images/' . $order->artwork->image) }}"
                                                        alt="{{ $order->artwork->title }}"
                                                        loading="lazy"
                                                    >
                                                @endif
                                            </div>

                                            <div class="col-12 col-md-9">
                                                <div class="row g-3">
                                                    <div class="col-sm-6">
                                                        <p class="mb-1">Nomor Pesanan</p>
                                                        <p>
                                                            {{ $order->order_code }}
                                                        </p>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <p class="mb-1">Nama Pembeli</p>
                                                        <p>
                                                            {{ $order->customer_name }}
                                                        </p>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <p class="mb-1">Judul Lukisan</p>
                                                        <p>
                                                            {{ $order->artwork?->title ?? 'Karya tidak tersedia' }}
                                                        </p>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <p class="mb-1">Seniman</p>
                                                        <p>
                                                            {{ $order->artwork?->artist ?? '-' }}
                                                        </p>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <p class="mb-1">Resolusi</p>
                                                        <p>
                                                            {{ $order->artwork?->resolution ?? '-' }}
                                                        </p>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <p class="mb-1">Software</p>
                                                        <p>
                                                            {{ $order->artwork?->software_used ?? '-' }}
                                                        </p>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <p class="mb-1">Harga Pembelian</p>
                                                        <p class="history-price">
                                                            Rp{{ number_format($order->total_price, 0, ',', '.') }}
                                                        </p>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <p class="mb-1">Tanggal Pembelian</p>
                                                        <p>
                                                            {{ $order->created_at?->format('d/m/Y H:i') ?? '-' }}
                                                        </p>
                                                    </div>

                                                    <div class="col-12">
                                                        <p class="mb-1">Status Pesanan</p>
                                                        <p>
                                                            @if ($order->status === 'pending')
                                                                Menunggu Konfirmasi
                                                            @elseif ($order->status === 'completed')
                                                                Selesai
                                                            @elseif ($order->status === 'cancelled')
                                                                Dibatalkan
                                                            @else
                                                                {{ ucfirst($order->status) }}
                                                            @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-5">
                                Belum ada pembelian yang tercatat.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- PAGINATION --}}
        @if ($orders->hasPages())
            <div class="history-pagination mt-4">
                {{ $orders->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>

    <div class="text-center">
        <a href="{{ route('produk') }}" class="history-back">
            Kembali ke Produk
        </a>
    </div>

</section>

@endsection
