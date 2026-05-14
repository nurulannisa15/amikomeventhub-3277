@extends('layouts.admin', ['title' => 'Kelola Kategori'])

@section('content')
<header class="flex justify-between items-center mb-10">
    <div>
        <h1 class="text-3xl font-black">Kelola Kategori</h1>
        <p class="text-slate-500 font-medium">Kelompokkan event Anda dengan kategori yang tepat.</p>
    </div>
    <button class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700 transition">
        + Tambah Kategori
    </button>
</header>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
    <div class="p-8 border-b border-slate-50 bg-slate-50/30">
        <form action="{{ route('admin.categories') }}" method="GET" class="flex gap-4">
            <div class="relative flex-1">
                <input type="text" name="search" value="{{ request('search') }}" 
                       placeholder="Cari nama kategori..." 
                       class="w-full px-5 py-3 pl-12 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition">
                <div class="absolute left-4 top-3.5 text-slate-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                </div>
            </div>
            <button type="submit" class="px-6 py-3 bg-slate-800 text-white rounded-xl font-bold hover:bg-slate-900 transition">
                Filter
            </button>
            @if(request('search'))
                <a href="{{ route('admin.categories') }}" class="px-6 py-3 bg-slate-200 text-slate-600 rounded-xl font-bold hover:bg-slate-300 transition">
                    Reset
                </a>
            @endif
        </form>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] tracking-widest">
                <tr>
                    <th class="px-8 py-4">No</th>
                    <th class="px-8 py-4">Nama Kategori</th>
                    <th class="px-8 py-4">Jumlah Event</th>
                    <th class="px-8 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y border-t">
                @forelse ($categories as $index => $category)
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6 font-bold text-slate-400">{{ $index + 1 }}</td>
                    <td class="px-8 py-6 font-black text-slate-800">{{ $category->name }}</td>
                    <td class="px-8 py-6">
                        <span class="px-3 py-1 bg-indigo-50 text-indigo-600 rounded-full text-xs font-bold">
                            {{ $category->events_count ?? $category->events()->count() }} Event
                        </span>
                    </td>
                    <td class="px-8 py-6 flex gap-2">
                        <button class="p-2.5 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition">Edit</button>
                        <button class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition">Hapus</button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-8 py-10 text-center text-slate-400 font-medium">
                        Kategori tidak ditemukan.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection