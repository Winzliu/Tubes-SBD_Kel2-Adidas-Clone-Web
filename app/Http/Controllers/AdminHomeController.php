<?php

namespace App\Http\Controllers;

use App\Models\Produk_Pesanan;
use Illuminate\Http\Request;
use App\Models\Pesanan;

class AdminHomeController extends Controller
{
    public function index()
    {
        $pesanans = Pesanan::latest()->paginate(5);

        // SELECT * FROM pesanans ORDER BY created_at DESC LIMIT 5;

        return view('Admin.homeAdmin', [
            'title'    => 'Dashboard',
            'pesanans' => $pesanans
        ]);
    }

    public function pesanan(Request $request)
    {
        $pesanan = Pesanan::with(['produk_pesanan'])->where('id', $request->id)->first();

        /* 
        SELECT pesanans.*, produk__pesanans.*
        FROM pesanans
        INNER JOIN produk__pesanans ON pesanans.id = produk__pesanans.pesanan_id
        WHERE pesanans.id = $request->id
        */

        return view('admin.pesanan', [
            'title'   => 'Detail Pesanan',
            'pesanan' => $pesanan,
        ]);
    }
}