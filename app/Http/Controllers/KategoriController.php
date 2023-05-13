<?php

namespace App\Http\Controllers;

use App\Models\Detailproduk;
use App\Models\Produk;
use App\Models\Wishlist;
use App\Models\Ukuran;
use App\Models\Warna;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $pengguna = null, $jenis = null, $kategori = null)
    {
        $ukurans = Ukuran::get();
        $warnas = Warna::get();

        if ($jenis == null) {
            $title = $pengguna;
            $judul = $pengguna;

            $minimum = $request->query('minimum');
            $maksimum = $request->query('maksimum');
            $warna = $request->query('warna');
            $ukuran = $request->query('ukuran');
            $filter = $request->query('filter');

            $id_semuaProduk = Detailproduk::with('produk')->where('pengguna', $pengguna)->pluck('id');

            $produks = Produk::with('warna', 'detailproduk', 'gambar')->whereIn('detailproduk_id', $id_semuaProduk);

            $produkserupas = Produk::with('warna', 'detailproduk', 'gambar')->whereIn('detailproduk_id', $id_semuaProduk)->get();

            if ($minimum != null && $maksimum != null) {
                $produks = $produks->where('harga', '>', $minimum)->where('harga', '<', $maksimum);
            }

            if ($warna != null) {
                $produks = $produks->where('warna_id', $warna);
            }

            if ($ukuran != null) {
                $produks = $produks->whereHas('produk_ukuran', function ($query) use ($ukuran) {
                    $query->where('ukuran_id', $ukuran);
                });
            }

            if ($filter == 'namaUp') {
                $produks = $produks->orderBy('nama', 'asc');
            }

            if ($filter == 'namaDown') {
                $produks = $produks->orderBy('nama', 'desc');
            }

            if ($filter == 'hargaUp') {
                $produks = $produks->orderBy('harga', 'asc');
            }

            if ($filter == 'hargaDown') {
                $produks = $produks->orderBy('harga', 'desc');
            }

            $produks = $produks->latest()->get();

            $produk_wishlist = Wishlist::with('produk')->get();

        } else if ($kategori == null) {
            $title = $pengguna . '/' . $jenis;
            $judul = $jenis;

            $minimum = $request->query('minimum');
            $maksimum = $request->query('maksimum');
            $warna = $request->query('warna');
            $ukuran = $request->query('ukuran');
            $filter = $request->query('filter');

            $id_semuaProduk = Detailproduk::where('pengguna', $pengguna)->where('jenis', $jenis)->pluck('id');
            $produks = Produk::with('warna', 'detailproduk', 'gambar')->whereIn('detailproduk_id', $id_semuaProduk);

            $produkserupas = Produk::with('warna', 'detailproduk', 'gambar')->whereIn('detailproduk_id', $id_semuaProduk)->get();

            if ($minimum != null && $maksimum != null) {
                $produks = $produks->where('harga', '>', $minimum)->where('harga', '<', $maksimum);
            }

            if ($warna != null) {
                $produks = $produks->where('warna_id', $warna);
            }

            if ($ukuran != null) {
                $produks = $produks->whereHas('produk_ukuran', function ($query) use ($ukuran) {
                    $query->where('ukuran_id', $ukuran);
                });
            }

            if ($filter == 'namaUp') {
                $produks = $produks->orderBy('nama', 'asc');
            }

            if ($filter == 'namaDown') {
                $produks = $produks->orderBy('nama', 'desc');
            }

            if ($filter == 'hargaUp') {
                $produks = $produks->orderBy('harga', 'asc');
            }

            if ($filter == 'hargaDown') {
                $produks = $produks->orderBy('harga', 'desc');
            }

            $produks = $produks->latest()->get();

            $produk_wishlist = Wishlist::with('produk')->get();
        } else {
            $title = $pengguna . '/' . $jenis . '/' . $kategori;
            $judul = $kategori;

            $minimum = $request->query('minimum');
            $maksimum = $request->query('maksimum');
            $warna = $request->query('warna');
            $ukuran = $request->query('ukuran');
            $filter = $request->query('filter');

            $id_semuaProduk = Detailproduk::where('pengguna', $pengguna)->where('jenis', $jenis)->where('kategori', $kategori)->pluck('id');
            $produks = Produk::with('warna', 'detailproduk', 'gambar')->whereIn('detailproduk_id', $id_semuaProduk);

            $produkserupas = Produk::with('warna', 'detailproduk', 'gambar')->whereIn('detailproduk_id', $id_semuaProduk)->get();

            if ($minimum != null && $maksimum != null) {
                $produks = $produks->where('harga', '>', $minimum)->where('harga', '<', $maksimum);
            }

            if ($warna != null) {
                $produks = $produks->where('warna_id', $warna);
            }

            if ($ukuran != null) {
                $produks = $produks->whereHas('produk_ukuran', function ($query) use ($ukuran) {
                    $query->where('ukuran_id', $ukuran);
                });
            }

            if ($filter == 'namaUp') {
                $produks = $produks->orderBy('nama', 'asc');
            }

            if ($filter == 'namaDown') {
                $produks = $produks->orderBy('nama', 'desc');
            }

            if ($filter == 'hargaUp') {
                $produks = $produks->orderBy('harga', 'asc');
            }

            if ($filter == 'hargaDown') {
                $produks = $produks->orderBy('harga', 'desc');
            }

            $produks = $produks->latest()->get();

            $produk_wishlist = Wishlist::with('produk')->get();
        }

        return view('User.kategori', [
            'title'           => $title,
            'judul'           => $judul,
            'produks'         => $produks,
            'produk_wishlist' => $produk_wishlist,
            'ukurans'         => $ukurans,
            'warnas'          => $warnas,
            'produkserupas'   => $produkserupas
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

    public function pencarian(Request $request)
    {
        $ukurans = Ukuran::get();
        $warnas = Warna::get();

        $title = $request->query('pencarian');
        $judul = $request->query('pencarian');

        $minimum = $request->query('minimum');
        $maksimum = $request->query('maksimum');
        $warna = $request->query('warna');
        $ukuran = $request->query('ukuran');
        $filter = $request->query('filter');

        $produks = Produk::with('warna', 'detailproduk', 'gambar')->where('nama', 'like', '%' . $request->query('pencarian') . '%');

        $produkserupas = Produk::with('warna', 'detailproduk', 'gambar')->get();

        if ($minimum != null && $maksimum != null) {
            $produks = $produks->where('harga', '>', $minimum)->where('harga', '<', $maksimum);
        }

        if ($warna != null) {
            $produks = $produks->where('warna_id', $warna);
        }

        if ($ukuran != null) {
            $produks = $produks->whereHas('produk_ukuran', function ($query) use ($ukuran) {
                $query->where('ukuran_id', $ukuran);
            });
        }

        if ($filter == 'namaUp') {
            $produks = $produks->orderBy('nama', 'asc');
        }

        if ($filter == 'namaDown') {
            $produks = $produks->orderBy('nama', 'desc');
        }

        if ($filter == 'hargaUp') {
            $produks = $produks->orderBy('harga', 'asc');
        }

        if ($filter == 'hargaDown') {
            $produks = $produks->orderBy('harga', 'desc');
        }

        $produks = $produks->latest()->get();

        $produk_wishlist = Wishlist::with('produk')->get();

        return view('User.kategori', [
            'title'           => $title,
            'judul'           => $judul,
            'produks'         => $produks,
            'produk_wishlist' => $produk_wishlist,
            'ukurans'         => $ukurans,
            'warnas'          => $warnas,
            'produkserupas'   => $produkserupas
        ]);
    }
}