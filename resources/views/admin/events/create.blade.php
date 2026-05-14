@extends('layouts.admin', ['title' => 'Tambah Event'])

@section('content')
<header class="mb-10">
    <h1 class="text-3xl font-black text-slate-800">Tambah Event</h1>
    <p class="text-slate-500 font-medium">Isi detail event baru dengan lengkap untuk dipublikasikan.</p>
</header>

@if ($errors->any())
<div class="mb-5 p-4 bg-rose-50 border border-rose-200 text-rose-600 rounded-2xl">
    <p class="font-bold">Gagal menyimpan:</p>
    <ul class="list-disc ml-5">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="bg-white rounded-[2.5rem] border border-slate-100 p-10 shadow-sm max-w-4xl">
    <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div class="grid grid-cols-2 gap-6">
            <div class="col-span-2">
                <label class="block text-sm font-bold text-slate-700 mb-2">Nama Event</label>
                <input type="text" name="title" value="{{ old('title') }}" placeholder="Masukkan nama event" class="w-full px-5 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition" required>
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Kategori</label>
                <select name="category_id" class="w-full px-5 py-3 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 transition" required>
                    <option value="" disabled selected>Pilih Kategori</option>
                    @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Tanggal & Waktu</label>
                <input type="datetime-local" name="date" value="{{ old('date') }}" class="w-full px-5 py-3 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 transition" required>
            </div>

            <div class="col-span-2">
                <label class="block text-sm font-bold text-slate-700 mb-2">Deskripsi</label>
                <textarea name="description" rows="4" placeholder="Jelaskan detail event..." class="w-full px-5 py-3 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 transition" required>{{ old('description') }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Harga (Rp)</label>
                <input type="number" name="price" value="{{ old('price') }}" placeholder="Contoh: 50000" class="w-full px-5 py-3 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 transition" required>
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Stok Tiket</label>
                <input type="number" name="stock" value="{{ old('stock') }}" placeholder="Contoh: 100" class="w-full px-5 py-3 rounded-xl border border-slate-200 outline-none focus:ring-2 focus:ring-indigo-500 transition" required>
            </div>

            <div class="col-span-2">
                <label class="block text-sm font-bold text-slate-700 mb-2">Lokasi</label>
                <input type="text" name="location" value="{{ old('location') }}" placeholder="Masukkan alamat" class="w-full px-5 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition" required>
            </div>

            <div class="col-span-2">
                <label class="block text-sm font-bold text-slate-700 mb-2">Upload Poster</label>
                <input type="file" name="poster" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 transition" required>
            </div>
        </div>

        <div class="flex justify-end gap-4 mt-8 pt-6 border-t border-slate-50">
            <a href="{{ route('admin.events.index') }}" class="px-6 ~py-3 font-bold text-slate-400 hover:text-slate-600 transition">Batal</a>
            <button type="submit" class="px-10 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700 transform active:scale-95 transition">
                Simpan Event
            </button>
        </div>
    </form>
</div>
@endsection