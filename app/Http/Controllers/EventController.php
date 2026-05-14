<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Transaction;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Method show untuk event detail
    public function show($id)
    {
        $event = Event::with('category')->findOrFail($id);
        return view('event-detail', compact('event'));
    }

    // Method checkout
    public function checkout($id)
    {
        $event = Event::findOrFail($id);
        return view('checkout', compact('event'));
    }

    // ✅ Method process untuk menangani submit form checkout
    public function process(Request $request, $event)
    {
        // Validasi input
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email',
            'customer_phone' => 'required|string',
        ]);

        // Ambil data event
        $eventModel = Event::findOrFail($event);

        // Generate order_id unik
        $orderId = 'TRX-' . strtoupper(\Str::random(8));

        // Simpan ke tabel transactions
        $transaction = Transaction::create([
            'event_id' => $eventModel->id,
            'order_id' => $orderId,
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'customer_phone' => $request->customer_phone,
            'total_price' => $request->total_price ?? ($eventModel->price + 5000),
            'status' => 'Success', // Simulasi langsung sukses
        ]);

        // Redirect ke halaman ticket dengan order_id
        return redirect()->route('ticket', ['id' => $orderId])
            ->with('success', 'Pembayaran berhasil!');
    }

    // ✅ Method ticket yang DINAMIS
    public function ticket($id = null)
    {
        // Jika ada parameter id (order_id), ambil data transaksi
        if ($id) {
            $transaction = Transaction::with('event')->where('order_id', $id)->firstOrFail();
            return view('ticket', compact('transaction'));
        }

        // Jika tidak ada parameter, ambil transaksi terakhir dari session
        // (untuk testing/manual access)
        $transaction = Transaction::with('event')->latest()->first();
        
        if (!$transaction) {
            return redirect()->route('home')->with('error', 'Tidak ada transaksi ditemukan.');
        }

        return view('ticket', compact('transaction'));
    }
}