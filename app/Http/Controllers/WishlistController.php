<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\Ukuran;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wishlists = Wishlist::with('produk')->get();

        // $ukurans = Ukuran::where('produk_id', $wishlists->produk->produk_ukuran->produk_id);

        // @dd($ukurans);


        return view('User.Akun.Wishlist', [
            'title'     => 'WIshlist',
            'wishlists' => $wishlists
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
            'produk_id' => 'required'
        ]);
        // untuk menjadikan inputan produk_id menjadi integer
        $validated['produk_id'] = intval($validated['produk_id']);
        $validated['user_id'] = auth('web')->user()->id;

        Wishlist::create($validated);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wishlist $wishlist)
    {
        Wishlist::destroy($wishlist->id);

        return redirect()->back();
    }

    public function destroyAll()
    {
        Wishlist::where('user_id', auth('web')->user()->id)->delete();

        return redirect()->back();
    }
}