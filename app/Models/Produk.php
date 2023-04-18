<?php

namespace App\Models;

use App\Models\Warna;
use App\Models\Gambar;
use App\Models\Detailproduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    public function gambar()
    {
        return $this->hasMany(Gambar::class);
    }

    public function detailproduk()
    {
        return $this->belongsTo(Detailproduk::class);
    }

    public function warna()
    {
        return $this->belongsTo(Warna::class);
    }
}