<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController as EventAdminController;

/*
|--------------------------------------------------------------------------
| USER AREA - Public Pages
|--------------------------------------------------------------------------
*/

// Halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman statis
Route::get('/profil', fn() => view('profil'))->name('profil');
Route::get('/katalog', fn() => view('katalog'))->name('katalog');
Route::get('/bantuan', fn() => view('bantuan'))->name('bantuan');
Route::get('/tentang', fn() => view('tentang'))->name('tentang');
Route::get('/contact', fn() => view('contact'))->name('contact');

// Alur pemesanan event
Route::get('/event-detail', [EventController::class, 'show'])->name('events.show');
Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout');
Route::get('/ticket', [EventController::class, 'ticket'])->name('ticket');

/*
|--------------------------------------------------------------------------
| ADMIN AREA - Dashboard & Management
|--------------------------------------------------------------------------
*/

// Group route admin dengan prefix 'admin' dan nama route diawali 'admin.'
Route::prefix('admin')->name('admin.')->group(function () {

    // 1. Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // 2. Kelola Event (CRUD lengkap)
    Route::resource('events', EventAdminController::class);

    // 3. Laporan Transaksi
    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions');

    // 4. Kelola Kategori (Menggunakan RESOURCE agar fitur Tambah, Edit, Hapus aktif)
    Route::resource('categories', CategoryController::class);

});