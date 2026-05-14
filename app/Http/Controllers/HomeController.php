<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // 1. Ambil semua kategori untuk tombol filter
        $categories = Category::all();
        
        // 2. Query dasar: ambil event dengan eager loading + filter tanggal
        $query = Event::with('category')
                    ->where('date', '>=', now())
                    ->orderBy('date', 'asc');
        
        // 3. Filter berdasarkan parameter URL ?category=slug-kategori
        if ($request->has('category') && $request->category != '') {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }
        
        // 4. Eksekusi query
        $events = $query->get();
        
        // 5. Kirim ke view
        return view('welcome', compact('events', 'categories'));
    }
}