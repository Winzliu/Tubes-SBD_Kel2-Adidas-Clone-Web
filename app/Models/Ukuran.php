<?php

namespace App\Models;

use App\Models\Produk_Ukuran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ukuran extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function produk_ukuran()
    {
        return $this->hasMany(Produk_Ukuran::class);
    }
}