<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Wishlist;
use App\Models\Produk;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keranjangs = Keranjang::with('produk', 'ukuran')->where('user_id', auth('web')->user()->id)->get();

        /* 
        SELECT *
        FROM keranjangs
        INNER JOIN produks ON keranjangs.produk_id = produks.id
        INNER JOIN ukurans ON keranjangs.ukuran_id = ukurans.id
        WHERE keranjangs.user_id = $_SESSION('web')->id
        */

        $produks = Produk::with(['detailproduk', 'gambar', 'warna', 'wishlist'])->inRandomOrder()->take(16)->get();

        /* 
        SELECT *
        FROM produks
        INNER JOIN detailproduks ON produks.detailproduk_id = detailproduks.id
        INNER JOIN gambars ON produks.id = gambars.produk_id
        INNER JOIN warnas ON produks.warna_id = warnas.id
        INNER JOIN wishlists ON produks.id = wishlists.produk_id
        ORDER BY RAND()
        LIMIT 16
        */

        $produk_wishlist = Wishlist::with('produk')->get();

        /* 
        SELECT *
        FROM wishlists
        INNER JOIN produks ON wishlists.produk_id = produks.id
        */

        return view('User.keranjang', [
            'title'           => 'keranjang',
            'keranjangs'      => $keranjangs,
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
        $validated = $request->validate([
            'produk_id'  => 'required',
            'ukuran_id'  => 'required',
            'jumlahItem' => 'required',
        ]);

        $validated['user_id'] = auth('web')->user()->id;

        $produk_keranjang = Keranjang::where('user_id', $validated['user_id'])->where('produk_id', $validated['produk_id'])->where('ukuran_id', $validated['ukuran_id'])->get();

        /* 
        SELECT *
        FROM keranjangs
        WHERE user_id = $validated['user_id']
        AND produk_id = $validated['produk_id']
        AND ukuran_id = $validated['ukuran_id']
        */

        $wishlist = Wishlist::where('user_id', $validated['user_id'])->where('produk_id', $validated['produk_id'])->get();

        /* 
        SELECT *
        FROM wishlists
        WHERE user_id = $validated['user_id']
        AND produk_id = $validated['produk_id']
        */

        if ($produk_keranjang->count() != 0) {
            return redirect()->back()->with('errorKeranjang', 'Produk Telah Berada Dalam Keranjang');
        } else {
            if ($wishlist->count() != 0) {
                Wishlist::destroy($wishlist->first()->id);

                /* 
                DELETE FROM wishlists
                WHERE id = $wishlist->id
                */

            }
            Keranjang::create($validated);

            /* 
            INSERT INTO keranjangs (user_id, produk_id, ukuran_id, jumlah)
            VALUES ($validated['user_id'], $validated['produk_id'], $validated['ukuran_id'], $validated['jumlah'])
            */

            return redirect()->back()->with('success', 'Berhasil Menambahkan Kedalam Keranjang');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Keranjang $keranjang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Keranjang $keranjang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Keranjang $keranjang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keranjang $keranjang)
    {
        Keranjang::destroy($keranjang->id);

        /* 
        DELETE FROM keranjangs WHERE id = $keranjang->id
        */

        return redirect()->back();
    }
}