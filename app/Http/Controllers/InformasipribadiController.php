<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InformasipribadiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('User.Akun.InformasiPribadi', [
            'title' => 'Informasi Pribadi'
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        if ($request->updateDetail) {
            $validated = $request->validate([
                'namaDepan'    => 'required|max:255',
                'namaBelakang' => 'required|max:255',
                'nomorTelepon' => 'required|digits_between:10,14|numeric',
            ]);

            auth('web')->user()->update($validated);

            return redirect()->back()->with('success', 'Perubahan Berhasil Disimpan!!');
        } else if ($request->updatePassword) {
            $validated = $request->validate([
                'password' => 'required|min:5|max:255'
            ]);

            if (Hash::check($request->passwordLama, auth('web')->user()->password)) {
                auth('web')->user()->update([
                    'password' => bcrypt($request->password)
                ]);
                return redirect()->back()->with('success', 'Password Berhasil Diubah!!');
            }

            return redirect()->back()->with('error', 'Konfirmasi Password Lama Salah!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}