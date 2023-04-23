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

        foreach ($produks as $p) {
            if (Str::slug($p->nama) == $slug && $p->warna->warna == $warna) {
                $produk = $p;
                $jumlah_produk = $produks->where('detailproduk_id', $p->detailproduk_id);
            }
        }

        $ukurans = $produk->produk_ukuran->pluck('ukuran_id');
        $ukurans = Ukuran::whereIn('id', $ukurans)->get();

        $produk_lainnya = $jumlah_produk->whereNotIn('id', $produk->id);
        $gambar_produk = Gambar::where('produk_id', $produk->id)->first()->gambar;

        $produk_tawaran = Produk::with(['detailproduk', 'gambar', 'warna', 'wishlist'])->where('stock', '>', 0)->inRandomOrder()->take(16)->get();
        $pelanggan_lain_membeli = Produk::with(['detailproduk', 'gambar', 'warna', 'wishlist'])->where('stock', '>', 0)->inRandomOrder()->take(16)->get();

        $ulasans = $produk->ulasan;

        $produk_wishlist = Wishlist::with('produk')->get();

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