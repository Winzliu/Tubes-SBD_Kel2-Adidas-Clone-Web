<?php

namespace App\Http\Controllers;

use App\Models\Detailproduk;
use App\Models\Gambar;
use App\Models\Produk;
use App\Models\Produk_Ukuran;
use App\Models\Ukuran;
use App\Models\Warna;
use Illuminate\Http\Request;

class AdminVariasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $warnas = Warna::get();
        $ukurans = Ukuran::get();
        $jenisUkurans = Ukuran::select('jenis')->distinct()->get();
        $produkSerupa = Produk::with(['detailproduk', 'gambar', 'warna'])->where('id', $request->id)->first();

        return view('Admin.tambahVariasi', [
            'title'        => 'Tambah Variasi Produk',
            'warnas'       => $warnas,
            'ukurans'      => $ukurans,
            'jenisUkurans' => $jenisUkurans,
            'produkSerupa' => $produkSerupa,
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
        // ukuran
        for ($i = 0; $i < Ukuran::count(); $i++) {
            if ($request->input('ukuran' . $i) != null) {
                $request->validate([
                    'stock' . $i => 'required|numeric',
                ]);
            }
        }
        $request->validate([
            'warna' => 'required',
        ]);
        // produk
        $produk = $request->validate([
            'nama'           => 'required|max:255',
            'deskripsiWarna' => 'required|max:255',
            'harga'          => 'required|numeric',
        ]);
        $produk['detailproduk_id'] = $request->detailproduk_id;
        $produk['warna_id'] = $request['warna'];

        // memasukkan nilai dalam table produk
        Produk::create($produk);

        // ambil produk_id terbaru
        $produk_id = Produk::latest('id')->value('id');

        // gambar
        for ($i = 0; $i < $request->jumlahGambar; $i++) {
            $gambar = $request->validate([
                'gambar' . $i => 'required|image|file|max:3072'
            ]);
        }

        // masukkan nilai dalam table gambar
        for ($i = 0; $i < $request->jumlahGambar; $i++) {
            $gambar['gambar' . $i] = $request->file('gambar' . $i);
            $namaGambar = $produk_id . '.' . ($i + 1) . '.' . $gambar['gambar' . $i]->getClientOriginalExtension();
            $gambar['gambar' . $i]->storeAs('img', $namaGambar);
            Gambar::create([
                'produk_id' => $produk_id,
                'gambar'    => $namaGambar,
            ]);
        }

        // ukuran
        for ($i = 0; $i < Ukuran::count(); $i++) {
            if ($request->input('ukuran' . $i) != null) {
                Produk_Ukuran::create([
                    'produk_id' => $produk_id,
                    'ukuran_id' => $request->input('ukuran' . $i),
                    'stock'     => $request->input('stock' . $i)
                ]);
            }
        }

        return redirect('/admin/produks')->with('success', 'Produk Berhasil Ditambahkan!!');
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