<?php

namespace App\Http\Controllers;

use App\Models\Warna;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminWarnaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warnas = Warna::paginate(10);

        // SELECT * FROM warnas LIMIT 10;

        return view('admin.warna', [
            'title'  => 'Daftar Warna',
            'warnas' => $warnas
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
        if (Warna::where('warna', Str::lower($request->warna))->exists()) {
            /* 
            SELECT EXISTS (
            SELECT 1
            FROM warnas
            WHERE LOWER(warna) = LOWER($request->warna)
            );
            */
            return redirect()->back()->with('error', 'Warna Yang Ditambahkan Sudah Tersedia!!');
        } else {
            $validated = $request->validate([
                'warna' => 'required',
            ]);
            Warna::create($validated);

            // INSERT INTO warnas ('warna') VALUES ($validated->warna)

            return redirect()->back()->with('success', 'Berhasil Menambahkan Warna');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Warna $warna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Warna $warna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Warna $warna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Warna $warna)
    {
        Warna::destroy($warna->id);
        // DELETE FROM warnas WHERE id = $warna->id;

        return redirect()->back()->with('success', 'Warna Berhasil Dihapus!!');
    }
}