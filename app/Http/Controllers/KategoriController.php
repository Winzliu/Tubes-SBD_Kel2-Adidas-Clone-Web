<?php

namespace App\Http\Controllers;

use App\Models\Detailproduk;
use App\Models\Produk;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($pengguna = null, $jenis = null, $kategori = null)
    {
        if ($jenis == null) {
            $title = $pengguna;
            $judul = $pengguna;

            $id_semuaProduk = Detailproduk::where('pengguna', $pengguna)->pluck('id');
            $produks = Produk::whereIn('detailproduk_id', $id_semuaProduk)->get();

            $produk_wishlist = Wishlist::with('produk')->get();
        } else if ($kategori == null) {
            $title = $pengguna . '/' . $jenis;
            $judul = $jenis;

            $id_semuaProduk = Detailproduk::where('pengguna', $pengguna)->where('jenis', $jenis)->pluck('id');
            $produks = Produk::whereIn('detailproduk_id', $id_semuaProduk)->get();

            $produk_wishlist = Wishlist::with('produk')->get();
        } else {
            $title = $pengguna . '/' . $jenis . '/' . $kategori;
            $judul = $kategori;

            $id_semuaProduk = Detailproduk::where('pengguna', $pengguna)->where('jenis', $jenis)->where('kategori', $kategori)->pluck('id');
            $produks = Produk::whereIn('detailproduk_id', $id_semuaProduk)->get();

            $produk_wishlist = Wishlist::with('produk')->get();
        }

        return view('User.kategori', [
            'title'           => $title,
            'judul'           => $judul,
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