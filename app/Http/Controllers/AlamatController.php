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

        $validated['user_id'] = auth('web')->user()->id;

        Alamat::create($validated);

        /* 
        INSERT INTO alamats (user_id, namaDepan, namaBelakang, nomorTelepon, namaJalan, negara, provinsi, kota, kecamatan, kelurahan, kodePos, created_at, updated_at)
        VALUES ('$validated['user_id']', '$validated['namaDepan']', '$validated['namaBelakang']', '$validated['nomorTelepon']', '$validated['namaJalan']', '$validated['negara']', '$validated['provinsi']', '$validated['kota']', '$validated['kecamatan']', '$validated['kelurahan']', '$validated['kodePos']', current_timestamp, current_timestamp);
        */

        if ($request->urlSebelumnya == 'http://adidas.test/daftaralamat') {
            return redirect('/daftaralamat')->with('success', 'Alamat Berhasil Ditambahkan!!');
        }
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
        return view('User.Akun.EditAlamat', [
            'title'  => 'Edit Alamat',
            'alamat' => $alamat
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alamat $alamat)
    {
        $validated = $request->validate([
            'namaDepan'    => 'required|max:255',
            'namaBelakang' => 'required|max:255',
            'nomorTelepon' => 'required|min:10|numeric',
            'namaJalan'    => 'required|max:255',
            'negara'       => 'required',
            'kodePos'      => 'required|numeric',
        ]);

        if ($request->provinsi == null) {
            $validated['provinsi'] = $alamat->provinsi;
        } else {
            $validated['provinsi'] = $request->provinsi;
        }

        if ($request->kota == null) {
            $validated['kota'] = $alamat->kota;
        } else {
            $validated['kota'] = $request->kota;
        }

        if ($request->kecamatan == null) {
            $validated['kecamatan'] = $alamat->kecamatan;
        } else {
            $validated['kecamatan'] = $request->kecamatan;
        }

        if ($request->kelurahan == null) {
            $validated['kelurahan'] = $alamat->kelurahan;
        } else {
            $validated['kelurahan'] = $request->kelurahan;
        }

        Alamat::where('id', $alamat->id)->update($validated);

        /* 
        UPDATE alamats
        SET namaDepan = '$validated['namaDepan']', namaBelakang = '$validated['namaBelakang']', nomorTelepon = '$validated['nomorTelepon']', namaJalan = '$validated['namaJalan']', negara = '$validated['negara']', provinsi = '$validated['provinsi']', kota = '$validated['kota']', kecamatan = '$validated['kecamatan']', kelurahan = '$validated['kelurahan']', kodePos = '$validated['kodePos']', updated_at = current_timestamp
        WHERE id = 'alamat_id';
        */

        return redirect('/daftaralamat')->with('success', 'Perubahan Berhasil Disimpan!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alamat $alamat)
    {
        Alamat::destroy($alamat->id);
        // DELETE FROM alamats WHERE id = '$alamat->id';

        return redirect()->back();
    }
}