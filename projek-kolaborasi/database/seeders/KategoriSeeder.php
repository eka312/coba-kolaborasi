<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;
use Illuminate\Support\Str;


class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      

        Kategori::insert([
            [
                'nama_kategori' => 'Wisata Alam',
                'slug' => Str::slug('Wisata Alam'),
            ],
            [
                'nama_kategori' => 'Wisata Budaya & Sejarah',
                'slug' => Str::slug('Wisata Budaya & Sejarah'),
            ],
            [
                'nama_kategori' => 'Kuliner Khas Malang',
                'slug' => Str::slug('Kuliner Khas Malang'),
            ],
            [
                'nama_kategori' => 'Wisata Pantai',
                'slug' => Str::slug('Wisata Pantai'),
            ],
        ]);

    }
}