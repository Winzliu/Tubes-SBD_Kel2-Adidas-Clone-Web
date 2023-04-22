<?php

namespace App\Models;

use App\Models\Produk;
use App\Models\Ukuran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Keranjang extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
    public function ukuran()
    {
        return $this->belongsTo(Ukuran::class);
    }
}