<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\PostKategori;
use App\Models\User;
use App\Models\Zakat;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Zakat::factory(100)->create();

        User::factory()->create([
            'name' => 'Amak Subaidi',
            'email' => 'amaksubaidi@gmail.com',
            'email_verified_at' => now(),
            'status' => 1,
            'password' => Hash::make('password'),
        ]);
        User::factory()->create([
            'name' => 'Fendi Alfi Fauzi',
            'email' => 'fendy.math@gmail.com',
            'email_verified_at' => now(),
            'status' => 1,
            'password' => Hash::make('password'),
        ]);

        Kategori::create(['kategori' => 'Fakir', 'icon' => 'bi bi-eye', 'color' => '#ffbb2c']);
        Kategori::create(['kategori' => 'Miskin', 'icon' => 'bi bi-infinity', 'color' => '#5578ff']);
        Kategori::create(['kategori' => 'Amil', 'icon' => 'bi bi-mortarboard', 'color' => '#e80368']);
        Kategori::create(['kategori' => 'Muallaf', 'icon' => 'bi bi-nut', 'color' => '#e361ff']);
        Kategori::create(['kategori' => 'Riqab', 'icon' => 'bi bi-shuffle', 'color' => '#47aeff']);
        Kategori::create(['kategori' => 'Gharim', 'icon' => 'bi bi-star', 'color' => '#ffa76e']);
        Kategori::create(['kategori' => 'Fi Sabilillah', 'icon' => 'bi bi-x-diamond', 'color' => '#11dbcf']);
        Kategori::create(['kategori' => 'Ibnu Sabil', 'icon' => 'bi bi-camera-video', 'color' => '#4233ff']);


        PostKategori::create(['nama' => 'Zakat Fitrah', 'slug' => 'zakat-fitrah']);
        PostKategori::create(['nama' => 'Penerima Zakat Fitrah', 'slug' => 'penerima-zakat-fitrah']);
        PostKategori::create(['nama' => 'Kategori Penerima', 'slug' => 'kategori-penerima']);
        PostKategori::create(['nama' => 'Waktu Pembayaran', 'slug' => 'waktu-pembayaran']);
    }
}
