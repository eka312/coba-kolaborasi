<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori'; // nama tabel kategori

    protected static function boot()
    {
        parent::boot();

        // Membuat slug otomatis ketika data kategori baru dibuat
        static::creating(function ($kategori) {
            $kategori->slug = Str::slug($kategori->nama_kategori);
        });

        // Membuat slug otomatis ketika data kategori diupdate
        static::updating(function ($kategori) {
            $kategori->slug = Str::slug($kategori->nama_kategori);
        });
    }

    public function wisata()
    {
        return $this->hasMany(Wisata::class, 'kategori_id');
    }
}
