<?php

namespace App\Http\Controllers;

use App\Models\Produk_Pesanan;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class SelesaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk_Pesanan::with('produk', 'pesanan')->where('pesanan_id', Pesanan::latest()->value('id'))->get();

        return view('User.Checkout.Selesai', [
            'title'   => 'Produk_Pesanan Selesai',
            'produks' => $produks
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
    public function show(Produk_Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk_Pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk_Pesanan $pesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk_Pesanan $pesanan)
    {
        //
    }
}