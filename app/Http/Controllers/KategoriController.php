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

        // SELECT * FROM ukurans

        $warnas = Warna::get();

        // SELECT * FROM warnas

        if ($jenis == null) {
            $title = $pengguna;
            $judul = $pengguna;

            $minimum = $request->query('minimum');
            $maksimum = $request->query('maksimum');
            $warna = $request->query('warna');
            $ukuran = $request->query('ukuran');
            $filter = $request->query('filter');

            $id_semuaProduk = Detailproduk::with('produk')->where('pengguna', $pengguna)->pluck('id');

            /* 
            SELECT dp.id
            FROM detailproduks dp
            JOIN produks p ON dp.id = p.detailproduk_id
            WHERE dp.pengguna = $pengguna;
            */

            $produks = Produk::with('warna', 'detailproduk', 'gambar')->whereIn('detailproduk_id', $id_semuaProduk);

            /* 
            SELECT *
            FROM produks
            JOIN warnas ON produks.warna_id = warnas.id
            JOIN detailproduks ON produks.detailproduk_id = detailproduks.id
            JOIN gambars ON produks.id = gambars.produk_id
            WHERE detailproduk_id IN $id_semuaProduk
            */

            $produkserupas = Produk::with('warna', 'detailproduk', 'gambar')->whereIn('detailproduk_id', $id_semuaProduk)->get();

            /* 
            SELECT *
            FROM produks
            JOIN warnas ON produks.warna_id = warnas.id
            JOIN detailproduks ON produks.detailproduk_id = detailproduks.id
            JOIN gambars ON produks.id = gambars.produk_id
            WHERE detailproduk_id IN $id_semuaProduk
             */

            if ($minimum != null && $maksimum != null) {
                $produks = $produks->where('harga', '>', $minimum)->where('harga', '<', $maksimum);

                /* 
                SELECT *
                FROM produks
                JOIN warnas ON produks.warna_id = warnas.id
                JOIN detailproduks ON produks.detailproduk_id = detailproduks.id
                JOIN gambars ON produks.id = gambars.produk_id
                WHERE detailproduk_id IN $id_semuaProduk
                AND harga > $minimum
                AND harga < $maksimum
                */

            }

            if ($warna != null) {
                $produks = $produks->where('warna_id', $warna);

                /*  
                SELECT *
                FROM produks
                JOIN warnas ON produks.warna_id = warnas.id
                JOIN detailproduks ON produks.detailproduk_id = detailproduks.id
                JOIN gambars ON produks.id = gambars.produk_id
                WHERE detailproduk_id IN $id_semuaProduk
                AND warna_id = $warna
                */

            }

            if ($ukuran != null) {
                $produks = $produks->whereHas('produk_ukuran', function ($query) use ($ukuran) {
                    $query->where('ukuran_id', $ukuran);
                });

                /* 
                SELECT *
                FROM produks
                JOIN warnas ON produks.warna_id = warnas.id
                JOIN detailproduks ON produks.detailproduk_id = detailproduks.id
                JOIN gambars ON produks.id = gambars.produk_id
                WHERE detailproduk_id IN $id_semuaProduk
                AND EXISTS (
                SELECT *
                FROM produk_ukurans
                WHERE produks.id = produk_ukurans.produk_id
                AND ukuran_id = $ukuran
                )
                */

            }

            if ($filter == 'namaUp') {
                $produks = $produks->orderBy('nama', 'asc');

                /* 
                SELECT *
                FROM produks
                JOIN warnas ON produks.warna_id = warnas.id
                JOIN detailproduks ON produks.detailproduk_id = detailproduks.id
                JOIN gambars ON produks.id = gambars.produk_id
                WHERE detailproduk_id IN $id_semuaProduk
                AND ORDER BY nama ASC
                */

            }

            if ($filter == 'namaDown') {
                $produks = $produks->orderBy('nama', 'desc');

                /* 
                SELECT *
                FROM produks
                JOIN warnas ON produks.warna_id = warnas.id
                JOIN detailproduks ON produks.detailproduk_id = detailproduks.id
                JOIN gambars ON produks.id = gambars.produk_id
                WHERE detailproduk_id IN $id_semuaProduk
                AND ORDER BY nama DESC
                */

            }

            if ($filter == 'hargaUp') {
                $produks = $produks->orderBy('harga', 'asc');

                /* 
                SELECT *
                FROM produks
                JOIN warnas ON produks.warna_id = warnas.id
                JOIN detailproduks ON produks.detailproduk_id = detailproduks.id
                JOIN gambars ON produks.id = gambars.produk_id
                WHERE detailproduk_id IN $id_semuaProduk
                AND ORDER BY harga ASC
                */

            }

            if ($filter == 'hargaDown') {
                $produks = $produks->orderBy('harga', 'desc');

                /* 
                SELECT *
                FROM produks
                JOIN warnas ON produks.warna_id = warnas.id
                JOIN detailproduks ON produks.detailproduk_id = detailproduks.id
                JOIN gambars ON produks.id = gambars.produk_id
                WHERE detailproduk_id IN $id_semuaProduk
                AND ORDER BY harga DESC
                */

            }

            $produks = $produks->latest()->paginate(16)->withQueryString();

            /* 
            SELECT *
            FROM (
            SELECT *
            FROM produks
            JOIN warnas ON produks.warna_id = warnas.id
            JOIN detailproduks ON produks.detailproduk_id = detailproduks.id
            JOIN gambars ON produks.id = gambars.produk_id
            WHERE detailproduk_id IN (id1, id2, id3, ...)
            ORDER BY created_at DESC
            LIMIT 16
            */

            $produk_wishlist = Wishlist::with('produk')->get();

            /* 
            SELECT *
            FROM wishlist
            JOIN produks ON wishlist.produk_id = produks.id
            */

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

            $produks = $produks->latest()->paginate(16)->withQueryString();

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

            $produks = $produks->latest()->paginate(16)->withQueryString();

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

        /* 
        SELECT *
        FROM produks
        INNER JOIN warnas ON produks.warna_id = warnas.id
        INNER JOIN detailproduks ON produks.detailproduk_id = detailproduks.id
        INNER JOIN gambars ON produks.id = gambars.produk_id
        WHERE produks.nama LIKE '%$request->query('pencarian')%'
        */

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

        $produks = $produks->latest()->paginate(16)->withQueryString();

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