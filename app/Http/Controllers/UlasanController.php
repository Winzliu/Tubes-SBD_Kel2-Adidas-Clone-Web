<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ulasans = Ulasan::with(['user', 'produk'])->latest()->paginate(5);

        /* 
        SELECT * FROM ulasans
        JOIN users ON ulasans.user_id = users.id
        JOIN produks ON ulasans.produk_id = produks.id
        ORDER BY ulasans.created_at DESC
        LIMIT 5
        */

        return view('Admin.verifikasi', [
            'title'   => 'Verifikasi Ulasan',
            'ulasans' => $ulasans
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
            'produk_id'   => 'required',
            'quality'     => 'required',
            'value'       => 'required',
            'price'       => 'required',
            'namaDepan'   => 'required|max:255',
            'judulUlasan' => 'required',
            'ulasan'      => 'required'
        ]);

        $validated['user_id'] = auth('web')->user()->id;
        $validated['is_verif'] = 0;

        $ulasan = Ulasan::create($validated);

        /* 
        INSERT INTO ulasans (produk_id, quality, value, price, namaDepan, judulUlasan, ulasan, user_id, is_verif, created_at, updated_at)
        VALUES ($validated['produk_id'], $validated['quality'], $validated['value'], $validated['price'], $validated['namaDepan'], $validated['judulUlasan'], $validated['ulasan'], $_SESSION('web')->id, 0, NOW(), NOW())
        */

        if ($ulasan->wasRecentlyCreated) {
            return redirect()->back()->with('success', 'Ulasan Telah Dikirim, Menunggu Verifikasi Admin');
        } else {
            return redirect()->back()->with('success', 'Error!!, Pastikan Mengisi Seluruh Form!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Ulasan $ulasan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ulasan $ulasan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ulasan $ulasan)
    {
        Ulasan::where('id', $ulasan->id)->update([
            'is_verif' => ($ulasan->is_verif == 1) ? 0 : 1
        ]);

        // UPDATE ulasans SET is_verif = CASE WHEN is_verif = 1 THEN 0 ELSE 1 END WHERE id =$ulasan->id

        if ($ulasan->is_verif == 1) {
            return redirect()->back()->with('error', 'Verfikasi Ulasan Telah Dihapus!!');
        } else {
            return redirect()->back()->with('success', 'Ulasan Telah Diverifikasi!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ulasan $ulasan)
    {
        Ulasan::destroy($ulasan->id);

        // DELETE FROM ulasan WHERE id = $ulasan->id

        return redirect()->back()->with('success', 'Ulasan Telah Dihapus!!');
    }
}