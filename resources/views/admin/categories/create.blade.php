@extends('layouts.admin', ['title' => 'Tambah Kategori'])
@section('content')
<h1 class="text-3xl font-black mb-10">Tambah Kategori</h1>
<div class="bg-white p-10 rounded-[2.5rem] border shadow-sm max-w-2xl">
    <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-6">
        @csrf
        <div>
            <label class="block font-bold mb-2">Nama Kategori</label>
            <input type="text" name="name" class="w-full px-5 py-3 rounded-xl border outline-none focus:ring-2 focus:ring-indigo-500" required>
        </div>
        <div class="flex gap-4">
            <button type="submit" class="px-8 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg">Simpan</button>
            <a href="{{ route('admin.categories.index') }}" class="px-8 py-3 text-slate-400 font-bold">Batal</a>
        </div>
    </form>
</div>
@endsection