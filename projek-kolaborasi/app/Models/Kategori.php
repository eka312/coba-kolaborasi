<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori'; // ← Tambahkan baris ini

    public function wisata()
    {
        return $this->hasMany(Wisata::class, 'kategori_id');
    }
}
