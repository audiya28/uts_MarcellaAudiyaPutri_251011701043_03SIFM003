<?php

namespace App\Http\Controllers;

use App\Models\DigitalArt;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    // Menampilkan formulir pembelian
    public function create(int $id)
    {
        $artwork = DigitalArt::findOrFail($id);

        return view('orders.create', compact('artwork'));
    }

    // Menyimpan pembelian ke database
    public function store(Request $request, int $id)
    {
        $artwork = DigitalArt::findOrFail($id);

        $validated = $request->validate([
            'customer_name' => 'required|string|max:100',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => [
                'required',
                'string',
                'max:20',
                'regex:/^[0-9+()\s-]+$/',
            ],
            'customer_address' => 'required|string|max:1000',
        ]);

        Order::create([
            'order_code' => (string) Str::uuid(),
            'digital_art_id' => $artwork->id,
            'customer_name' => $validated['customer_name'],
            'customer_email' => $validated['customer_email'],
            'customer_phone' => $validated['customer_phone'],
            'customer_address' => $validated['customer_address'],
            'total_price' => $artwork->price,
            'status' => 'pending',
        ]);

        return redirect()
            ->route('orders.history')
            ->with('success', 'Pesanan berhasil dibuat!');
    }

    // Menampilkan tabel riwayat pembelian
    public function history()
    {
        $orders = Order::with('artwork')
            ->orderBy('id', 'asc')
            ->paginate(10);

        return view('orders.history', compact('orders'));
    }
}
