<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;


class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::insert([
            ['nama_kategori' => 'Wisata Alam'],
            ['nama_kategori' => 'Wisata Budaya & Sejarah'],
            ['nama_kategori' => 'Kuliner Khas Malang'],
            ['nama_kategori' => 'Wisata Pantai'],
        ]);
    }
}
