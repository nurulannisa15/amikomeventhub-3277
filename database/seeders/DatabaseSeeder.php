<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Event;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Akun Admin
        User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // 2. Buat Kategori Event
        $category1 = Category::create([
            'name' => 'Seminar IT',
            'slug' => 'seminar-it',
        ]);

        $category2 = Category::create([
            'name' => 'Entertainment',
            'slug' => 'entertainment',
        ]);

        $category3 = Category::create([
            'name' => 'Workshop',
            'slug' => 'workshop',
        ]);
        
        Event::create([
            'category_id' => $category2->id,
            'title' => 'Jazz Night 2026',
            'description' => 'Nikmati malam yang indah dengan alunan musik jazz yang merdu.',
            'date' => '2026-11-10 19:00:00',  // ← Diupdate: November 2026
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'assets/concert.png',
        ]);

        Event::create([
            'category_id' => $category1->id,
            'title' => 'Hackathon - Unleash Your Inner Developer',
            'description' => 'Ayo asah skill coding kamu dan ciptakan solusi inovatif!',
            'date' => '2026-10-05 10:00:00',  // ← Diupdate: Oktober 2026
            'location' => 'Inkubator Amikom',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'assets/hackathon.png',
        ]);

        Event::create([
            'category_id' => $category1->id,
            'title' => 'AI & FUTURE TECH SUMMIT 2026',
            'description' => 'Jelajahi tren terkini dalam kecerdasan buatan.',
            'date' => '2026-09-01 13:00:00',  // ← Diupdate: September 2026
            'location' => 'Cinema Unit 6',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'assets/workshop.png',
        ]);

        // TAMBAHKAN 3 EVENT LAGI (dengan tanggal masa depan)
        Event::create([
            'category_id' => $category3->id,
            'title' => 'UI/UX Masterclass',
            'description' => 'Pelajari dasar-dasar desain UI/UX dari praktisi profesional.',
            'date' => '2026-12-15 09:00:00',  // ← Diupdate: Desember 2026
            'location' => 'Lab Komputer Amikom',
            'price' => 75000,
            'stock' => 50,
            'poster_path' => 'posters/event-4.png',
        ]);

        Event::create([
            'category_id' => $category2->id,
            'title' => 'E-Sport Championship 2027',
            'description' => 'Turnamen gaming terbesar se-Universitas AMIKOM.',
            'date' => '2027-01-20 14:00:00',  // ← Diupdate: Januari 2027
            'location' => 'Gedung Olahraga Amikom',
            'price' => 0,
            'stock' => 200,
            'poster_path' => 'posters/event-5.png',
        ]);

        Event::create([
            'category_id' => $category1->id,
            'title' => 'Digital Marketing Workshop 2027',
            'description' => 'Strategi pemasaran digital untuk pemula.',
            'date' => '2027-02-10 10:00:00',  // ← Diupdate: Februari 2027
            'location' => 'Ruang Seminar 1',
            'price' => 100000,
            'stock' => 75,
            'poster_path' => 'posters/event-6.png',
        ]);
    }
}