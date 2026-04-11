<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan FAQ - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-indigo-900 flex flex-col min-h-screen text-white">

    <nav class="bg-indigo-950/50 border-b border-indigo-800 shadow-sm sticky top-0 z-50 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-gradient-to-br from-purple-500 to-orange-400 rounded-lg flex items-center justify-center">
                        <span class="text-white text-xs font-bold">A</span>
                    </div>
                    <span class="text-xl font-bold text-white tracking-tight">Amikom<span class="text-indigo-300">EventHub</span></span>
                </div>

                <div class="hidden md:flex items-center space-x-4">
                    <a href="/" class="text-indigo-200 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition">Home</a>
                    <a href="/profil" class="text-indigo-200 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition">Profil</a>
                    <a href="/katalog" class="text-indigo-200 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition">Katalog</a>
                    
                    <a href="/bantuan" class="bg-indigo-700 text-white px-4 py-2 rounded-lg text-sm font-bold border border-indigo-600 transition">
                        Bantuan
                    </a>
                    
                    <a href="/kontak" class="text-indigo-200 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition">Kontak</a>

                    <div class="h-6 w-px bg-indigo-800 mx-2"></div>

                    <a href="/profil" class="flex items-center gap-3 group">
                        <span class="text-xs font-medium text-indigo-300 group-hover:text-white transition">Nurul Annisa</span>
                        <div class="w-9 h-9 rounded-full border-2 border-indigo-500 overflow-hidden group-hover:border-white transition">
                            <img src="https://ui-avatars.com/api/?name=Nurul+Annisa&background=6366f1&color=fff" alt="User Profile" class="w-full h-full object-cover">
                        </div>
                    </a>
                </div>

                <div class="md:hidden">
                    <button class="text-indigo-300 hover:text-white">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center p-6 md:p-12">
        <div class="max-w-2xl w-full mx-auto">
            <h2 class="text-4xl font-extrabold mb-8 text-center bg-clip-text text-transparent bg-gradient-to-b from-white to-indigo-300">
                Ada Pertanyaan?
            </h2>
            
            <div class="space-y-4">
                <details class="group bg-indigo-800/50 border border-indigo-700 rounded-2xl p-6 shadow-lg open:bg-indigo-800 transition">
                    <summary class="font-bold text-lg cursor-pointer list-none flex justify-between items-center">
                        Apa itu AmikomEventHub?
                        <span class="group-open:rotate-180 transition-transform text-indigo-400">▼</span>
                    </summary>
                    <p class="mt-4 text-indigo-200 leading-relaxed border-t border-indigo-700 pt-4">
                        Platform pusat informasi kegiatan dan event mahasiswa di Universitas Amikom Yogyakarta.
                    </p>
                </details>

                <details class="group bg-indigo-800/50 border border-indigo-700 rounded-2xl p-6 shadow-lg open:bg-indigo-800 transition">
                    <summary class="font-bold text-lg cursor-pointer list-none flex justify-between items-center">
                        Bagaimana cara mendaftar?
                        <span class="group-open:rotate-180 transition-transform text-indigo-400">▼</span>
                    </summary>
                    <p class="mt-4 text-indigo-200 leading-relaxed border-t border-indigo-700 pt-4">
                        Pilih event di halaman katalog, lalu klik tombol pendaftaran yang tersedia.
                    </p>
                </details>
            </div>

            <div class="mt-12 flex justify-center gap-6 text-xs">
                <a href="/" class="text-indigo-400 hover:text-white font-bold uppercase tracking-widest transition">Home</a>
                <a href="/profil" class="text-indigo-400 hover:text-white font-bold uppercase tracking-widest transition">Profil</a>
                <a href="/katalog" class="text-indigo-400 hover:text-white font-bold uppercase tracking-widest transition">Katalog</a>
            </div>
        </div>
    </main>

    <footer class="py-10 text-center text-indigo-300/50 border-t border-indigo-800 bg-indigo-950/30">
        <p>&copy; 2026 <strong class="text-white">AmikomEventHub</strong> Universitas Amikom Yogyakarta</p>
    </footer>

</body>

</html>