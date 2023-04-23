<?php

use App\Models\Gambar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AlamatController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\SelesaiController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\RegistrasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/AkunSaya', function () {
    return view('User.Akun.AkunSaya', [
        'title' => 'Akun Saya'
    ]);
});

// home controller
Route::get('/', [HomeController::class, 'index']);

// produk controller
Route::get('/produk/{slug}/{warna}', [ProdukController::class, 'index']);

// ulasan controller
Route::post('/ulasan', [UlasanController::class, 'store']);

// registrasi controller
Route::resource('/registrasi', RegistrasiController::class)->middleware('guest');

// login controller
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::resource('/login', LoginController::class)->except(['index']);
Route::match(['get', 'post'], '/logout', [LoginController::class, 'logout'])->middleware('auth');

// wishlist controller
Route::delete('/wishlist/deleteall', [WishlistController::class, 'destroyAll'])->middleware('auth');
Route::resource('/wishlist', WishlistController::class)->middleware('auth');

// keranjang controller
Route::resource('/keranjang', KeranjangController::class)->middleware('auth');

//alamat controller
Route::resource('/tambahalamat', AlamatController::class)->middleware('auth');

//checkout controller
Route::get('/checkout/{id?}', [CheckoutController::class, 'index'])->middleware('auth');
Route::resource('/checkout', CheckoutController::class)->except(['index'])->middleware('auth');

//checkout controller
Route::resource('/pembayaran', PembayaranController::class)->middleware('auth');

//checkout controller
Route::resource('/pembayaran-selesai', SelesaiController::class)->middleware('auth');

// kategori controller
Route::get('/search', [KategoriController::class, 'pencarian']);
Route::resource('/{pengguna?}/{jenis?}/{kategori?}', KategoriController::class);