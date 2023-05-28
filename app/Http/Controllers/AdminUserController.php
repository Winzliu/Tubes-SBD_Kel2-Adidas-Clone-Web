<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->pencarian) {
            $users = User::where('namaDepan', 'like', '%' . $request->query('pencarian') . '%')->orWhere('namaBelakang', 'like', '%' . $request->query('pencarian') . '%')->paginate(5)->withQueryString();

            /* 
            SELECT *
            FROM users
            WHERE namaDepan LIKE '%$request->query('pencarian')%' OR namaBelakang LIKE '%$request->query('pencarian')%'
            LIMIT 5;
            */

        } else {
            $users = User::paginate(5);

            /* 
            SELECT *
            FROM users
            LIMIT 5;
            */

        }

        return view('Admin.user', [
            'title' => 'Daftar User',
            'users' => $users
        ]);
    }

    public function user(User $user)
    {
        return view('Admin.detailUser', [
            'title' => 'Detail User',
            'user'  => $user
        ]);
    }

    public function destroy(User $user)
    {
        User::destroy($user->id);

        // DELETE FROM users WHERE id = '$user->id';

        return redirect()->back()->with('success', 'User Berhasil Dihapus!!');
    }
}