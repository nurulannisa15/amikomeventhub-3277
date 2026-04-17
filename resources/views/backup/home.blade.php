<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 flex flex-col min-h-screen">
    <nav class="bg-white border-b border-gray-100 shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-gradient-to-br from-purple-600 to-orange-500 rounded-lg flex items-center justify-center">
                        <span class="text-white text-xs font-bold">A</span>
                    </div>
                    <span class="text-xl font-bold text-slate-800 tracking-tight">Amikom<span class="text-indigo-900">EventHub</span></span>
                </div>

                <div class="hidden md:flex items-center space-x-4">
                    <a href="/" class="bg-indigo-50 text-indigo-600 px-4 py-2 rounded-lg text-sm font-bold border border-indigo-100 transition">Home</a>
                    <a href="/profil" class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition">Profil</a>
                    <a href="/katalog" class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition">Katalog</a>
                    <a href="/bantuan" class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition">Bantuan</a>
                    <a href="/kontak" class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition">Kontak</a>

                    <div class="h-6 w-px bg-gray-200 mx-2"></div>

                    <a href="/profil" class="flex items-center gap-3 group">
                        <span class="text-xs font-medium text-gray-500 group-hover:text-indigo-600 transition">Nurul Annisa</span>
                        <div class="w-9 h-9 rounded-full border-2 border-indigo-500 overflow-hidden group-hover:border-indigo-600 transition">
                            <img src="https://ui-avatars.com/api/?name=Nurul+Annisa&background=6366f1&color=fff" alt="User Profile" class="w-full h-full object-cover">
                        </div>
                    </a>
                </div>

                <div class="md:hidden flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full overflow-hidden border border-gray-200">
                        <img src="https://ui-avatars.com/api/?name=Nurul+Annisa&background=6366f1&color=fff" class="w-full h-full">
                    </div>
                    <button class="text-gray-500">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 flex flex-col items-center text-center">
            
            <div class="inline-flex items-center gap-2 bg-indigo-50 border border-indigo-100 px-4 py-2 rounded-full mb-6">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
                </span>
                <span class="text-xs font-bold text-indigo-600 uppercase tracking-widest">Platform Event Amikom 2026</span>
            </div>

            <h1 class="text-5xl md:text-7xl font-black text-slate-900 tracking-tight leading-tight">
                Temukan Event <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600 text-6xl md:text-8xl">Terbaikmu Disini.</span>
            </h1>

            <p class="mt-8 text-lg text-slate-500 max-w-2xl leading-relaxed">
                Platform resmi untuk mahasiswa Universitas Amikom Yogyakarta mencari informasi seminar, workshop, dan kegiatan kampus yang menunjang karir masa depanmu.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row gap-4">
                <a href="/katalog" class="px-8 py-4 bg-indigo-600 text-white font-bold rounded-2xl shadow-xl shadow-indigo-200 hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-300">
                    Jelajahi Katalog
                </a>
                <a href="/bantuan" class="px-8 py-4 bg-white text-slate-700 border border-slate-200 font-bold rounded-2xl hover:bg-slate-50 transition-all duration-300">
                    Cara Mendaftar
                </a>
            </div>

            <div class="mt-20 grid grid-cols-2 md:grid-cols-3 gap-8 border-t border-slate-200 pt-10 w-full max-w-4xl">
                <div>
                    <p class="text-3xl font-black text-slate-800">50+</p>
                    <p class="text-sm text-slate-400 font-medium">Event Aktif</p>
                </div>
                <div>
                    <p class="text-3xl font-black text-slate-800">10k+</p>
                    <p class="text-sm text-slate-400 font-medium">Mahasiswa Terdaftar</p>
                </div>
                <div class="hidden md:block">
                    <p class="text-3xl font-black text-slate-800">100%</p>
                    <p class="text-sm text-slate-400 font-medium">Informasi Resmi</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-10 text-center text-slate-500 border-t border-slate-200 bg-white">
        <p>&copy; 2026 <strong class="text-slate-800">AmikomEventHub</strong> Universitas Amikom Yogyakarta</p>
    </footer>

</body>

</html>