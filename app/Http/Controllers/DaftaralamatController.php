<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use Illuminate\Http\Request;

class DaftaralamatController extends Controller
{
    public function index(Request $request)
    {
        $alamats = Alamat::where('user_id', auth()->user()->id)->get();

        return view('User.Akun.DaftarAlamat', [
            'title'   => 'Daftar Alamat',
            'alamats' => $alamats
        ]);
    }
}