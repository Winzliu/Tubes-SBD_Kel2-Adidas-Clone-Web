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
        // $id_produk = Produk::inRandomOrder()->take(4)->pluck('id');
        // $gambars = Gambar::whereIn('id_produk', $id_produk)->pluck('gambar');

        $produks = Produk::with(['detailproduk', 'gambar', 'warna', 'wishlist'])->inRandomOrder()->take(16)->get();
        $produk_wishlist = Wishlist::with('produk')->get();

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