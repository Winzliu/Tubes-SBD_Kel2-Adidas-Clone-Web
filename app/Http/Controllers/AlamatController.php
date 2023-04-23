<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use Illuminate\Http\Request;

class AlamatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('User.Akun.TambahAlamat', [
            'title' => 'Tambah Alamat'
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

        $validated['user_id'] = auth()->user()->id;

        Alamat::create($validated);

        return redirect('/checkout')->with('success', 'Alamat Berhasil Ditambahkan!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alamat $alamat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alamat $alamat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alamat $alamat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alamat $alamat)
    {
        //
    }
}