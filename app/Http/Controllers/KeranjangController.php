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
        $keranjangs = Keranjang::with('produk', 'ukuran')->get();

        $produks = Produk::with(['detailproduk', 'gambar', 'warna', 'wishlist'])->inRandomOrder()->take(16)->get();

        $produk_wishlist = Wishlist::with('produk')->get();


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

        $validated['user_id'] = auth()->user()->id;

        $produk_keranjang = Keranjang::where('user_id', $validated['user_id'])->where('produk_id', $validated['produk_id'])->get();

        $wishlist = Wishlist::where('user_id', $validated['user_id'])->where('produk_id', $validated['produk_id'])->get();

        if ($wishlist->count() != 0) {
            Wishlist::destroy($wishlist->first()->id);
        }

        if ($produk_keranjang->count() != 0) {
            return redirect()->back()->with('errorKeranjang', 'Produk Telah Berada Dalam Keranjang');
        } else {
            Keranjang::create($validated);
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

        return redirect()->back();
    }
}