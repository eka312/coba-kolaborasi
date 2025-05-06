<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;
<<<<<<< HEAD
use Illuminate\Support\Str;
=======
>>>>>>> d0ce2d65f9b97e917cf320262c942ac67c6951f8


class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
      

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
=======
        Kategori::insert([
            ['nama_kategori' => 'Wisata Alam'],
            ['nama_kategori' => 'Wisata Budaya & Sejarah'],
            ['nama_kategori' => 'Kuliner Khas Malang'],
            ['nama_kategori' => 'Wisata Pantai'],
        ]);
    }
}
>>>>>>> d0ce2d65f9b97e917cf320262c942ac67c6951f8
