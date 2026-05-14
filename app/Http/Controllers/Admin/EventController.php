<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Tampilkan Daftar Event
     */
    public function index()
    {
        $events = Event::with('category')->latest()->paginate(10);
        return view('admin.events.index', compact('events'));
    }

    /**
     * Form Tambah Event
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.events.create', compact('categories'));
    }

    /**
     * Simpan Event Baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'location' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'date' => 'required'
        ]);

        // Upload Poster
        $posterPath = $request->file('poster')->store('posters', 'public');

        // Simpan ke Database (Tanpa Slug)
        Event::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'location' => $request->location,
            'date' => $request->date,
            'poster_path' => $posterPath,
        ]);

        return redirect()->route('admin.events.index')->with('success', 'Event berhasil disimpan!');
    }

    /**
     * Form Edit Event
     */
    public function edit(Event $event)
    {
        $categories = Category::all();
        return view('admin.events.edit', compact('event', 'categories'));
    }

    /**
     * Update Event
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:1',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only([
            'title',
            'category_id',
            'description',
            'date',
            'location',
            'price',
            'stock'
        ]);

        if ($request->hasFile('poster')) {
            if ($event->poster_path) {
                Storage::disk('public')->delete($event->poster_path);
            }
            $data['poster_path'] = $request->file('poster')->store('posters', 'public');
        }

        $event->update($data);
        return redirect()->route('admin.events.index')->with('success', 'Event berhasil diperbarui!');
    }

    /**
     * Hapus Event
     */
    public function destroy(Event $event)
    {
        // Hapus file gambar dari storage
        if ($event->poster_path) {
            Storage::disk('public')->delete($event->poster_path);
        }

        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Event dihapus!');
    }
}
