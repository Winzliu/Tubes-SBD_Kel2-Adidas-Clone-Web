<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("User.registrasi", [
            'title' => 'Registrasi'
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
            'namaDepan'          => 'required|max:255',
            'namaBelakang'       => 'required|max:255',
            'nomorTelepon'       => 'required|digits_between:10,14|numeric',
            'tanggalLahir'       => 'required',
            'gender'             => 'required',
            'email'              => 'required|email:dns|unique:users',
            'password'           => 'required|min:5|max:255',
            'konfirmasiPassword' => 'required|same:password',
            'checkbox'           => 'accepted'
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        /* 
        INSERT INTO users (namaDepan, namaBelakang, nomorTelepon, tanggalLahir, gender, email, password, created_at, updated_at)
        VALUES ($validated['namaDepan'],$validated['namaBelakang'],$validated['nomorTelepon'],$validated['tanggalLahir'],$validated['gender'],$validated['email'],$validated['password'], NOW(), NOW())
        */

        return redirect('/login')->with('success', 'Registrasi Berhasil, Silahkan Login!!');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}