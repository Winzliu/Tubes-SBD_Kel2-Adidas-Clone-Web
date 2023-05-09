<?php

namespace App\Models;

use App\Models\Produk;
use App\Models\Ukuran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk_Ukuran extends Model
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