<?php

namespace App\Models;

use App\Models\Alamat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesanan extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function produk_pesanan()
    {
        return $this->hasMany(Produk_Pesanan::class);
    }
}