<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\Produk;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::with(['detailproduk', 'gambar', 'warna', 'wishlist'])->inRandomOrder()->take(16)->get();

        /* 
        SELECT *
        FROM produks
        INNER JOIN detailproduks ON produks.detailproduk_id = detailproduks.id
        INNER JOIN gambars ON produks.id = gambars.produk_id
        INNER JOIN warnas ON produks.warna_id = warnas.id
        INNER JOIN wishlists ON produks.id = wishlists.produk_id
        ORDER BY RAND()
        LIMIT 16;
        */

        $produk_wishlist = Wishlist::with('produk')->get();

        /* 
        SELECT *
        FROM wishlists
        INNER JOIN produks ON wishlists.produk_id = produks.id;
        */

        return view('User.index', [
            'title'           => 'Adidas',
            'produks'         => $produks,
            'produk_wishlist' => $produk_wishlist
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
    public function show(Gambar $gambar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gambar $gambar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gambar $gambar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gambar $gambar)
    {
        //
    }
}