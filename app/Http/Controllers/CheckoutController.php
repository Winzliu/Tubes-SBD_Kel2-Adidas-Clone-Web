<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Alamat;
use App\Models\Keranjang;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id = null)
    {
        $alamats = Alamat::where('user_id', auth('web')->user()->id)->get();

        /* 
        SELECT *
        FROM alamats
        WHERE user_id = session('web')->id;
        */

        $alamatpilihan = $id;

        $keranjangs = Keranjang::with('produk', 'ukuran')->where('user_id', auth('web')->user()->id)->get();

        /* 
        SELECT *
        FROM keranjangs
        INNER JOIN produks ON keranjangs.produk_id = produks.id
        INNER JOIN ukurans ON keranjangs.ukuran_id = ukurans.id
        WHERE keranjangs.user_id = $_SESSION('web')->id;
        */

        return view('User.Checkout.DetailPesanan', [
            'title'         => 'Checkout',
            'alamats'       => $alamats,
            'alamatpilihan' => $alamatpilihan,
            'keranjangs'    => $keranjangs,
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