<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Produk_Pesanan;
use Illuminate\Http\Request;

class DetailpesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pesanan = Pesanan::with('alamat')->where('id', $request->id)->first();

        $produkPesanans = Produk_Pesanan::where('pesanan_id', $pesanan->id)->get();

        return view('User.Akun.DetailPesanan', [
            'title'          => 'Detail Pesanan',
            'pesanan'        => $pesanan,
            'produkPesanans' => $produkPesanans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pesanan $pesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesanan $pesanan)
    {
        //
    }
}