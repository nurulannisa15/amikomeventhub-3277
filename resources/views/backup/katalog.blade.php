<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Event - AmikomEventHub</title>
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
                    <a href="/" class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition">Home</a>
                    <a href="/profil" class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition">Profil</a>
                    
                    <a href="/katalog" class="bg-indigo-50 text-indigo-600 px-4 py-2 rounded-lg text-sm font-bold border border-indigo-100 transition">
                        Katalog
                    </a>
                    
                    <a href="/bantuan" class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition">Bantuan</a>
                    <a href="/kontak" class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition">Kontak</a>
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

    <main class="flex-grow p-6 md:p-12">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <span class="bg-white px-4 py-1.5 rounded-full border border-gray-200 text-xs font-bold text-gray-400 uppercase tracking-widest">Event Terbaru & Terpopuler</span>
                <h2 class="text-4xl font-black text-slate-800 mt-4">Katalog <span class="text-blue-600">AmikomEventHub</span></h2>
                <p class="text-gray-500 mt-2">Temukan berbagai event menarik dan tingkatkan skill kamu bersama komunitas Amikom.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="group bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="h-2 w-20 bg-purple-500 rounded-full mb-4"></div>
                    <h3 class="font-bold text-xl mb-2 italic text-slate-800">Workshop Laravel Cloud</h3>
                    <p class="text-gray-500">Belajar deploy aplikasi Laravel 11 dengan mudah dan cepat di server cloud.</p>
                    <button class="mt-4 px-4 py-2 bg-purple-50 text-purple-600 rounded-lg text-sm font-bold uppercase tracking-wider">Upcoming</button>
                </div>

                <div class="group bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="h-2 w-20 bg-orange-500 rounded-full mb-4"></div>
                    <h3 class="font-bold text-xl mb-2 italic text-slate-800">Seminar UI/UX Modern</h3>
                    <p class="text-gray-500">Eksplorasi trend desain antarmuka terbaru untuk aplikasi mobile 2026.</p>
                    <button class="mt-4 px-4 py-2 bg-orange-50 text-orange-600 rounded-lg text-sm font-bold uppercase tracking-wider">Open Registration</button>
                </div>
            </div>

            <div class="mt-12 flex flex-wrap justify-center gap-4">
                <a href="/" class="px-6 py-2 bg-white border border-gray-300 rounded-full hover:bg-gray-100 transition font-semibold text-gray-600">Ke Home</a>
                <a href="/bantuan" class="px-6 py-2 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transition font-semibold">Ke Bantuan</a>
            </div>
        </div>
    </main>

    <footer class="py-10 text-center text-slate-500 border-t border-slate-200 bg-white/50">
        <p>&copy; 2026 <strong class="text-slate-800">AmikomEventHub</strong> Universitas Amikom Yogyakarta</p>
    </footer>

</body>

</html>