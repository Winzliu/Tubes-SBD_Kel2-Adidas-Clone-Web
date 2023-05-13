<?php

namespace App\Http\Controllers;

use App\Models\Ukuran;
use Illuminate\Http\Request;
use \Illuminate\Support\Str;

class AdminUkuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->jenis) {
            $ukurans = Ukuran::where('jenis', $request->jenis)->paginate(5)->withQueryString();
        } else {
            $ukurans = Ukuran::paginate(5);
        }
        $jenis = Ukuran::select('jenis')->distinct()->get();

        return view('admin.ukuran', [
            'title'   => 'Daftar Ukuran',
            'ukurans' => $ukurans,
            'jenis'   => $jenis
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
        if (Ukuran::where('ukuran', Str::lower($request->ukuran))->exists() && Ukuran::where('jenis', Str::lower($request->jenis))->exists()) {
            return redirect()->back()->with('error', 'Ukuran Yang Ditambahkan Sudah Tersedia!!');
        } else {
            $validated = $request->validate([
                'ukuran' => 'required',
                'jenis'  => 'required'
            ]);
            Ukuran::create($validated);

            return redirect()->back()->with('success', 'Berhasil Menambahkan Ukuran');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Ukuran $ukuran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ukuran $ukuran)
    {
        return view('Admin.editUkuran', [
            'title'  => 'Edit Ukuran',
            'ukuran' => $ukuran
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ukuran $ukuran)
    {
        $validated = $request->validate([
            'ukuran' => 'required',
            'jenis'  => 'required',
        ]);


        Ukuran::where('id', $ukuran->id)->update($validated);

        return redirect('/admin/ukuran')->with('success', 'Ukuran Berhasil Diubah!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ukuran $ukuran)
    {
        Ukuran::destroy($ukuran->id);

        return redirect()->back()->with('success', 'Ukuran Berhasil Dihapus!!');
    }
}