<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wishlists = Wishlist::with('produk')->get();

        /* 
        SELECT * FROM wishlists
        JOIN produks ON wishlists.produk_id = produks.id
        */

        return view('User.Akun.Wishlist', [
            'title'     => 'Wishlist',
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

        /* 
        INSERT INTO wishlists (produk_id, user_id, created_at, updated_at)
        VALUES ($validated['produk_id'], $_SESSION('web')->id, NOW(), NOW())
        */

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

        // DELETE FROM wishlists WHERE id = $wishlist->id

        return redirect()->back();
    }

    public function destroyAll()
    {
        Wishlist::where('user_id', auth('web')->user()->id)->delete();

        // DELETE FROM wishlists WHERE user_id = $_SESSION('web')->id

        return redirect()->back();
    }
}