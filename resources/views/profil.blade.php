<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Praktikan - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">

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
                    
                    <a href="/profil" class="bg-indigo-50 text-indigo-600 px-4 py-2 rounded-lg text-sm font-bold border border-indigo-100 transition">
                        Profil
                    </a>
                    
                    <a href="/katalog" class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition">Katalog</a>
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

    <div class="flex-grow flex items-center justify-center p-6">
        <div class="max-w-sm w-full bg-white shadow-xl rounded-3xl p-6 text-center border-t-8 border-blue-600">
            <div class="w-24 h-24 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center text-blue-600 text-3xl font-bold">
                P
            </div>
            <h2 class="text-2xl font-bold text-gray-800">Profil Praktikan</h2>
            
            <div class="mt-4 text-left bg-gray-50 p-4 rounded-xl space-y-3">
                <div>
                    <p class="text-xs text-gray-400 font-bold uppercase tracking-wider">Nama</p>
                    <p class="font-semibold text-gray-800">Nurul Annisa</p>
                </div>
                <div>
                    <p class="text-xs text-gray-400 font-bold uppercase tracking-wider">NIM</p>
                    <p class="font-semibold text-gray-800">24.12.3277</p>
                </div>
                <div>
                    <p class="text-xs text-gray-400 font-bold uppercase tracking-wider">Kelas</p>
                    <p class="font-semibold text-gray-800">Digital Business 04</p>
                </div>
                <div>
                    <p class="text-xs text-gray-400 font-bold uppercase tracking-wider">Program Studi</p>
                    <p class="font-semibold text-gray-800">Sistem Informasi</p>
                </div>
            </div>

            <div class="mt-6 flex flex-col gap-2">
                <a href="/" class="py-2.5 bg-gray-200 text-gray-700 rounded-xl font-semibold hover:bg-gray-300 transition">
                    Kembali ke Home
                </a>
                <div class="grid grid-cols-2 gap-2">
                    <a href="/katalog" class="py-2.5 bg-blue-600 text-white rounded-xl font-semibold hover:bg-blue-700 transition">Katalog</a>
                    <a href="/bantuan" class="py-2.5 bg-green-600 text-white rounded-xl font-semibold hover:bg-green-700 transition">Bantuan</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="py-8 text-center text-slate-500 border-t border-gray-200 w-full bg-white/50">
        <p>&copy; 2026 <strong class="text-slate-800">AmikomEventHub</strong> Universitas Amikom Yogyakarta</p>
    </footer>

</body>

</html>