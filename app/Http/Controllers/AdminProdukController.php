<?php

namespace App\Http\Controllers;

use App\Models\Detailproduk;
use App\Models\Produk;
use App\Models\Gambar;
use App\Models\Produk_Ukuran;
use App\Models\Ulasan;
use App\Models\Warna;
use App\Models\Ukuran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $produks = Produk::with('warna', 'detailproduk', 'gambar')->where('nama', 'like', '%' . $request->query('pencarian') . '%')->latest()->paginate(5)->withQueryString();

        /* 
        SELECT p.*, w.warna, dp.deskripsi, dp.subDeskripsi, dp.spesifikasi, g.gambar
        FROM produks p
        INNER JOIN warnas w ON p.warna_id = w.id
        INNER JOIN detailproduks dp ON p.detailproduk_id = dp.id
        INNER JOIN gambars g ON p.id = g.produk_id
        WHERE p.nama LIKE '%$request->query('pencarian')%'
        ORDER BY p.created_at DESC;
        */

        return view('Admin.produks', [
            'title'   => 'Daftar Produk',
            'produks' => $produks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $warnas = Warna::get();

        // SELECT * FROM warnas;

        $ukurans = Ukuran::get();

        // SELECT * FROM ukurans;

        $jenisUkurans = Ukuran::select('jenis')->distinct()->get();

        // SELECT DISTINCT jenis FROM ukurans;

        return view('Admin.tambahProduk', [
            'title'        => 'Tambah Produk',
            'warnas'       => $warnas,
            'ukurans'      => $ukurans,
            'jenisUkurans' => $jenisUkurans
        ]);
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
        $produk = $request->validate([
            'nama'           => 'required|max:255',
            'deskripsiWarna' => 'required|max:255',
            'harga'          => 'required|numeric',
        ]);
        // detailproduk
        $detailProduk = $request->validate([
            'deskripsi'    => 'required|max:255',
            'subDeskripsi' => 'required',
            'spesifikasi'  => 'required',
            'pengguna'     => 'required',
            'jenis'        => 'required',
            'kategori'     => 'required',
        ]);
        // gambar
        for ($i = 0; $i < $request->jumlahGambar; $i++) {
            $gambar = $request->validate([
                'gambar' . $i => 'required|image|file|max:3072'
            ]);
        }

        // memasukkan nilai dalam table detail produk
        Detailproduk::create($detailProduk);

        /* 
        INSERT INTO detailproduks (deskripsi, subDeskripsi, spesifikasi, pengguna, jenis, kategori)
        VALUES ('$detailproduk->deskripsi', '$detailproduk->subDeskripsi', '$detailproduk->spesifikasi', '$detailproduk->pengguna', '$detailproduk->jenis', '$detailproduk->kategori');
        */

        // produk
        $produk['detailproduk_id'] = Detailproduk::latest('id')->value('id');
        $produk['warna_id'] = $request['warna'];

        // memasukkan nilai dalam table produk
        Produk::create($produk);

        /* 
        INSERT INTO produks (nama, deskirpsiWarna, harga, detailproduk_id, warna_id)
        VALUES ('$produk->nama', '$produk->deskripsiWarna', '$produk->harga', '$produk->detailproduk_id', '$produk->warna_id');
        */

        // ambil produk_id terbaru
        $produk_id = Produk::latest('id')->value('id');

        // SELECT id FROM produks ORDER BY id DESC LIMIT 1;

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

        // INSERT INTO gambars (produk_id, gambar) VALUES ('$produk_id', '$namaGambar');

        for ($i = 0; $i < Ukuran::count(); $i++) {
            if ($request->input('ukuran' . $i) != null) {
                Produk_Ukuran::create([
                    'produk_id' => $produk_id,
                    'ukuran_id' => $request->input('ukuran' . $i),
                    'stock'     => $request->input('stock' . $i)
                ]);
            }
        }

        // INSERT INTO produk__ukurans (produk_id, ukuran_id, stock) VALUES ('$produk_id', '$request->input('ukuran' . $i)', '$request->input('stock' . $i )');

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
        $warnas = Warna::get();

        // SELECT * FROM warnas

        $ukurans = Ukuran::get();

        // SELECT * FROM ukurans;

        $jenisUkurans = Ukuran::select('jenis')->distinct()->get();

        // SELECT DISTINCT jenis FROM ukurans;

        $produk_ukuran = $produk->produk_ukuran;

        // SELECT * FROM produk_ukurans WHERE produk_id = $produk->id;

        return view('Admin.editProduk', [
            'title'         => 'Edit Produk',
            'produk'        => $produk,
            'warnas'        => $warnas,
            'ukurans'       => $ukurans,
            'jenisUkurans'  => $jenisUkurans,
            'produk_ukuran' => $produk_ukuran
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        for ($i = 0; $i < Ukuran::count(); $i++) {
            if ($request->input('ukuran' . $i) != null) {
                $request->validate([
                    'stock' . $i => 'required|numeric',
                ]);
            }
        }

        // detailproduk
        $detailProduk = $request->validate([
            'deskripsi'    => 'required|max:255',
            'subDeskripsi' => 'required',
            'spesifikasi'  => 'required',
            'pengguna'     => 'required',
            'jenis'        => 'required',
            'kategori'     => 'required',
        ]);

        // produk
        $produkBaru = $request->validate([
            'nama'           => 'required|max:255',
            'deskripsiWarna' => 'required|max:255',
            'harga'          => 'required|numeric',
        ]);
        $request->validate([
            'warna' => 'required',
        ]);

        // gambar
        for ($i = 0; $i < $request->jumlahGambar; $i++) {
            $gambar = $request->validate([
                'gambar' . $i => 'required|image|file|max:3072'
            ]);
        }

        // memasukkan nilai dalam table detail produk
        Detailproduk::where('id', $produk->detailproduk->id)->update($detailProduk);

        /* 
        UPDATE detailproduks
        SET deskripsi = 'nilai_deskripsi', subDeskripsi = 'nilai_subDeskripsi', spesifikasi = 'nilai_spesifikasi', pengguna = 'nilai_pengguna', jenis = 'nilai_jenis', kategori = 'nilai_kategori'
        WHERE id IN (SELECT detailproduk_id FROM produks WHERE id = $produk->id);
        */

        $produkBaru['detailproduk_id'] = $produk->detailproduk->id;
        $produkBaru['warna_id'] = $request['warna'];

        // memasukkan nilai dalam table produk
        $produk->update($produkBaru);

        /* 
        UPDATE produks
        SET nama = '$produkBaru['nama']', deskripsiWarna = '$produkBaru['deskripsiWarna']', harga = '$produkBaru['harga']', detailproduk_id = '$produkBaru['detailproduk_id']', warna_id = '$produkBaru['warna_id']'
        WHERE id = $produk->id;
        */

        // masukkan nilai dalam table gambar
        for ($i = 0; $i < $produk->gambar->count(); $i++) {
            if ($request->file('gambar' . $i)) {
                if ($request->input('gambarLama' . $i)) {
                    Storage::delete('img/' . $request->input('gambarLama' . $i));
                }
                $gambar['gambar' . $i] = $request->file('gambar' . $i);
                $namaGambar = $produk->id . '.' . ($i + 1) . '.' . $gambar['gambar' . $i]->getClientOriginalExtension();
                $gambar['gambar' . $i]->storeAs('img', $namaGambar);
                Gambar::where('id', $produk->gambar[$i]->id)->update([
                    'produk_id' => $produk->id,
                    'gambar'    => $namaGambar,
                ]);
            } else {
                Gambar::where('id', $produk->gambar[$i]->id)->update([
                    'produk_id' => $produk->id,
                    'gambar'    => $produk->gambar[$i]->gambar,
                ]);
            }
        }

        /* 
        UPDATE gambars
        SET produk_id = '$produk->id', gambar = '$namaGambar'
        WHERE id IN (SELECT gambar_id FROM produks WHERE id = $produk->id);
        */

        // ukuran
        for ($i = 0; $i < $request->jumlahUkuran; $i++) {
            Produk_Ukuran::destroy($request->input('ukuranLama' . $i));
        }
        for ($i = 0; $i < Ukuran::count(); $i++) {
            if ($request->input('ukuran' . $i) != null) {
                Produk_Ukuran::create([
                    'produk_id' => $produk->id,
                    'ukuran_id' => $request->input('ukuran' . $i),
                    'stock'     => $request->input('stock' . $i)
                ]);
            }
        }

        /* 
        DELETE FROM produk__ukurans
        WHERE id = $request->input('ukuranLama' . $i);
        */

        // INSERT INTO produk__ukurans (produk_id, ukuran_id, stock) VALUES ('$produk_id', '$request->input('ukuran' . $i)', '$request->input('stock' . $i )');

        return redirect('/admin/produks')->with('success', 'Produk Berhasil Diedit!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        foreach ($produk->ulasan as $ulasan) {
            Ulasan::destroy($ulasan->id);

            /* 
            DELETE FROM ulasans
            WHERE produk_id = $produk->id;
            */
        }
        for ($i = 0; $i < $produk->gambar->count(); $i++) {
            Storage::delete('img/' . $produk->gambar[$i]->gambar);
            Gambar::destroy($produk->gambar[$i]->id);

            /* 
            DELETE FROM gambars
            WHERE produk_id = $produk->id;
            */
        }
        for ($i = 0; $i < $produk->produk_ukuran->count(); $i++) {
            Produk_Ukuran::destroy($produk->produk_ukuran[$i]->id);

            /* 
            DELETE FROM produk_ukurans
            WHERE produk_id = $produk->id;
            */
        }
        Produk::destroy($produk->id);

        /* 
            DELETE FROM produks
            WHERE id = $produk->id;
        */

        Detailproduk::destroy($produk->detailproduk->id);

        /* 
            DELETE FROM detailproduks
            WHERE id IN (SELECT detailproduk_id FROM produks WHERE id = $produk->id);
            */

        return redirect()->back()->with('success', 'Produk Berhasil Dihapus!!');
    }
}