<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Gambar;
use App\Models\Ukuran;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug, $warna)
    {
        $produks = Produk::with(['detailproduk', 'gambar', 'warna', 'ulasan'])->get();

        /* 
        SELECT *
        FROM produks
        INNER JOIN detailproduks ON produks.detailproduk_id = detailproduks.id
        INNER JOIN gambars ON produks.id = gambars.produk_id
        INNER JOIN warnas ON produks.id = warnas.produk_id
        INNER JOIN ulasans ON produks.id = ulasans.produk_id
        */

        foreach ($produks as $p) {
            if (Str::slug($p->nama) == $slug && $p->warna->warna == $warna) {
                $produk = $p;
                $jumlah_produk = $produks->where('detailproduk_id', $p->detailproduk_id);

                // SELECT * FROM produks WHERE detailproduk_id = $p->detailproduk_id

            }
        }

        $ukurans = $produk->produk_ukuran;

        // SELECT * FROM produk_ukurans WHERE produk_id = $produk_id;

        $produk_lainnya = $jumlah_produk->whereNotIn('id', $produk->id);

        // SELECT * FROM produk WHERE detailproduk_id = $p->detailproduk_id AND id NOT IN $produk->id

        $gambar_produk = Gambar::where('produk_id', $produk->id)->first()->gambar;

        // SELECT gambar FROM gambars WHERE produk_id = $produk->id LIMIT 1

        $produk_tawaran = Produk::with(['detailproduk', 'gambar', 'warna', 'wishlist'])->inRandomOrder()->take(16)->get();
        $pelanggan_lain_membeli = Produk::with(['detailproduk', 'gambar', 'warna', 'wishlist'])->inRandomOrder()->take(16)->get();

        /* 
        SELECT * FROM produks
        JOIN detailproduks ON produks.detailproduk_id = detailproduks.id
        JOIN gambars ON produsk.id = gambars.produk_id
        JOIN warnas ON produks.warna_id = warnas.id
        JOIN wishlists ON produks.id = wishlists.produk_id
        ORDER BY RAND()
        LIMIT 16
        */

        $ulasans = $produk->ulasan;

        $produk_wishlist = Wishlist::with('produk')->get();

        /* 
        SELECT * FROM wishlists
        JOIN produks ON wishlist.produk_id = produk.id
        */

        return view('User.produks', [
            'title'                  => $produk->nama,
            'produk'                 => $produk,
            'jumlahWarna'            => $jumlah_produk->count(),
            'gambar_produk'          => $gambar_produk,
            'produk_lainnya'         => collect($produk_lainnya),
            'produk_tawaran'         => $produk_tawaran,
            'pelanggan_lain_membeli' => $pelanggan_lain_membeli,
            'ukurans'                => $ukurans,
            'ulasans'                => $ulasans,
            'produk_wishlist'        => $produk_wishlist
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
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        //
    }
}