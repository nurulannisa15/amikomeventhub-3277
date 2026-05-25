<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use App\Models\Partner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        // 1. Ambil semua kategori untuk tombol filter
        $categories = Category::all();

        // 2. Ambil semua partner untuk ditampilkan di homepage (Soal 4 UTS)
        $partners = Partner::all();

        // 3. Query events dengan Eager Loading + filter tanggal masa depan
        $query = Event::with('category')
            ->where('date', '>=', now())
            ->orderBy('date', 'asc');

        // 4. Filter berdasarkan kategori jika ada parameter ?category=slug
        if ($request->has('category') && $request->category != '') {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // 5. Eksekusi query
        $events = $query->get();

        // 6. Kirim semua data ke view welcome.blade.php
        return view('welcome', compact('events', 'categories', 'partners'));
    }
}
