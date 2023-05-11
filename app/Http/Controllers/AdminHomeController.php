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
        return view('Admin.homeAdmin', [
            'title'    => 'Dashboard',
            'pesanans' => $pesanans
        ]);
    }

    public function pesanan(Request $request)
    {
        $pesanan = Pesanan::with('alamat')->where('id', $request->id)->first();

        $produkPesanans = Produk_Pesanan::where('pesanan_id', $pesanan->id)->get();

        return view('admin.pesanan', [
            'title'          => 'Detail Pesanan',
            'pesanan'        => $pesanan,
            'produkPesanans' => $produkPesanans
        ]);
    }
}