@extends('layouts.admin', ['title' => 'Edit Kategori'])

@section('content')
<header class="mb-10">
    <h1 class="text-3xl font-black text-slate-800">Edit Kategori</h1>
    <p class="text-slate-500 font-medium">Ubah nama kategori <span class="text-indigo-600">"{{ $category->name }}"</span></p>
</header>

<div class="bg-white rounded-[2.5rem] border border-slate-100 p-10 shadow-sm max-w-2xl">
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT') <div>
            <label class="block text-sm font-bold text-slate-700 mb-2">Nama Kategori</label>
            <input type="text" 
                   name="name" 
                   value="{{ old('name', $category->name) }}" 
                   class="w-full px-5 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition" 
                   required>
            @error('name')
                <p class="text-rose-500 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-4 mt-8 pt-6 border-t border-slate-50">
            <button type="submit" class="px-10 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700 transform active:scale-95 transition">
                Simpan Perubahan
            </button>
            <a href="{{ route('admin.categories.index') }}" class="px-6 py-3 font-bold text-slate-400 hover:text-slate-600 transition">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection