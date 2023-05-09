<?php

namespace App\Models;

use App\Models\Produk;
use App\Models\Pesanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk_Pesanan extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
}