<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Wisata extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_wisata';
    protected $table = 'wisatas';
    protected $guarded = [];
    public $timestamps = false;

    protected static function boot(){
        parent::boot();

        static::creating(function ($wisata) {
            $wisata->slug = Str::slug($wisata->judul);
        });

        static::updating(function ($wisata) {
            $wisata->slug = Str::slug($wisata->judul);
        });
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }


}
