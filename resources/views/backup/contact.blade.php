<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kontak - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 flex flex-col min-h-screen">

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
                    <a href="/" class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition">Home</a>
                    <a href="/profil" class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition">Profil</a>
                    <a href="/katalog" class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition">Katalog</a>
                    <a href="/bantuan" class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition">Bantuan</a>
                    <a href="/kontak" class="bg-indigo-50 text-indigo-600 px-4 py-2 rounded-lg text-sm font-bold border border-indigo-100 transition">Kontak</a>
                </div>

                <div class="md:hidden">
                    <button class="text-gray-500 hover:text-gray-600">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex-grow flex items-center justify-center p-6">
        <div class="bg-white p-8 rounded-3xl shadow-xl border border-slate-100 text-center max-w-md w-full">
            <h1 class="text-3xl font-extrabold text-slate-800 mb-6">Hubungi Kami</h1>
            
            <div class="space-y-4 mb-8 text-left">
                <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-2xl border border-slate-100 hover:border-indigo-200 transition">
                    <div class="w-10 h-10 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Email Resmi</p>
                        <p class="text-slate-700 font-medium">admin@amikomeventhub.com</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-2xl border border-slate-100 hover:border-green-200 transition">
                    <div class="w-10 h-10 bg-green-100 text-green-600 rounded-full flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">WhatsApp</p>
                        <p class="text-slate-700 font-medium">+62 812-3456-7890</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-2xl border border-slate-100 hover:border-red-200 transition">
                    <div class="w-10 h-10 bg-red-100 text-red-600 rounded-full flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Lokasi</p>
                        <p class="text-slate-700 font-medium text-sm">Gedung 2, Lt. 3, Universitas Amikom Yogyakarta</p>
                    </div>
                </div>
            </div>
            
            <a href="/" class="group flex items-center justify-center gap-2 bg-indigo-600 text-white font-bold py-3 px-6 rounded-2xl hover:bg-indigo-700 hover:shadow-lg transition duration-300">
                <span>Kembali ke Home</span>
                <span class="group-hover:-translate-x-1 transition-transform">←</span>
            </a>
        </div>
    </div>

    <footer class="py-10 text-center text-slate-500 border-t border-slate-200 bg-white/50">
        <p>&copy; 2026 <strong class="text-slate-800">AmikomEventHub</strong> Universitas Amikom Yogyakarta</p>
    </footer>

</body>

</html>