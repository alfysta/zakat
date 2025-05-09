<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::factory()->create(
            ['kategori' => 'Fakir'],
            ['kategori' => 'Miskin'],
            ['kategori' => 'Amil'],
            ['kategori' => 'Muallaf'],
            ['kategori' => 'Riqab'],
            ['kategori' => 'Gharim'],
            ['kategori' => 'Fi Sabilillah'],
            ['kategori' => 'Ibnu Sabil']

    );
    }
}
