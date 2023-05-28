<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use App\Models\Pesanan;
use App\Models\Keranjang;
use App\Models\Produk_Pesanan;
use App\Models\Produk;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $alamat_id = $request->alamat_id;

        $alamat = Alamat::where('id', $alamat_id)->first();

        /* 
        SELECT * FROM alamats
        WHERE id = $alamat_id
        LIMIT 1
        */

        $keranjangs = Keranjang::with('produk', 'ukuran')->where('user_id', auth('web')->user()->id)->get();

        /* 
        SELECT * FROM keranjangs
        JOIN produks ON keranjangs.produk_id = produks.id
        JOIN ukurans ON keranjangs.ukuran_id = ukurans.id
        WHERE keranjangs.user_id = $_SESSION('web')->id
        */

        return view('User.Checkout.UlasBayar', [
            'title'      => 'Ulas & Bayar',
            'alamat'     => $alamat,
            'keranjangs' => $keranjangs,
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
            'pembayaran'   => 'required',
            'totalHarga'   => 'required',
            'namaDepan'    => 'required|max:255',
            'namaBelakang' => 'required|max:255',
            'nomorTelepon' => 'required|min:10|numeric',
            'namaJalan'    => 'required|max:255',
            'negara'       => 'required',
            'provinsi'     => 'required',
            'kota'         => 'required',
            'kecamatan'    => 'required',
            'kelurahan'    => 'required',
            'kodePos'      => 'required|numeric',
        ]);

        $validated['user_id'] = auth('web')->user()->id;
        $validated['status'] = 'Berhasil';

        Pesanan::create($validated);

        /* 
        INSERT INTO pesanans (pembayaran, totalHarga, namaDepan, namaBelakang, nomorTelepon, namaJalan, negara, provinsi, kota, kecamatan, kelurahan, kodePos, user_id, status)
        VALUES ($validated['pembayaran'], $validated['totalHarga'], $validated['namaDepan'], $validated['namaBelakang'], $validated['nomorTelepon'], $validated['namaJalan'], $validated['negara'], $validated['provinsi'], $validated['kota'], $validated['kecamatan'], $validated['kelurahan'], $validated['kodePos'], $validated['user_id'], $validated['status'])
        */

        $keranjangs = Keranjang::where('user_id', auth('web')->user()->id)->get();

        foreach ($keranjangs as $keranjang) {
            $produk_id = $keranjang->produk_id;
            Produk_Pesanan::create([
                'pesanan_id' => Pesanan::latest()->value('id'),
                'nama'       => Produk::where('id', $produk_id)->value('nama'),
                'harga'      => Produk::where('id', $produk_id)->value('harga'),
                'warna'      => Produk::where('id', $produk_id)->value('deskripsiWarna'),
                'jumlahItem' => $keranjang->where('produk_id', $produk_id)->value('jumlahItem'),
                'ukuran'     => $keranjang->ukuran->ukuran
            ]);

            /*  
            INSERT INTO produk__pesanans (pesanan_id, nama, harga, warna, jumlahItem, ukuran)
            SELECT
            (SELECT id FROM pesanans ORDER BY id DESC LIMIT 1),
            (SELECT nama FROM produks WHERE id = $produk_id),
            (SELECT harga FROM produks WHERE id = $produk_id),
            (SELECT deskripsiWarna FROM produks WHERE id = $produk_id),
            (SELECT jumlahItem FROM keranjangs WHERE produk_id = $produk_id),
            (SELECT ukuran FROM ukurans WHERE id = (SELECT ukuran_id FROM keranjangs WHERE produk_id = $produk_id))
            */

            $produk = Produk::where('id', $produk_id);

            // SELECT * FROM produks WHERE id = $produk_id

            $produk->first()->produk_ukuran->where('ukuran_id', $keranjang->ukuran->id)->first()->update([
                'stock' => $produk->first()->produk_ukuran->where('ukuran_id', $keranjang->ukuran->id)->value('stock') - $keranjang->where('produk_id', $produk_id)->value('jumlahItem')
            ]);

            Keranjang::destroy($keranjang->id);

            // DELETE FROM keranjangs WHERE id = $keranjang->id

        }


        return redirect('/pembayaran-selesai');
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