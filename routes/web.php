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
use App\Http\Controllers\AkunsayaController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminWarnaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\AdminProdukController;
use App\Http\Controllers\AdminUkuranController;
use App\Http\Controllers\AdminVariasiController;
use App\Http\Controllers\DaftaralamatController;
use App\Http\Controllers\DetailpesananController;
use App\Http\Controllers\RiwayatpesananController;
use App\Http\Controllers\InformasipribadiController;

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


// Admin
// login admin controller
Route::resource('/admin/login', AdminLoginController::class)->middleware('bukanAdmin');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->middleware('admin');

// home admin controller
Route::get('/admin', [AdminHomeController::class, 'index'])->middleware('admin');
Route::get('/admin/pesanan/{id}', [AdminHomeController::class, 'pesanan'])->middleware('admin');

// produk admin controller
Route::resource('/admin/produks', AdminProdukController::class)->middleware('admin');

// variasi produk admin controller
Route::get('/admin/variasi/{id}', [AdminVariasiController::class, 'index'])->middleware('admin');
Route::post('/admin/variasi', [AdminVariasiController::class, 'store'])->middleware('admin');

// produk admin controller
Route::get('/admin/verifikasi', [UlasanController::class, 'index'])->middleware('admin');
Route::put('/admin/verifikasi/{ulasan}', [UlasanController::class, 'update'])->middleware('admin');
Route::delete('/admin/verifikasi/{ulasan}', [UlasanController::class, 'destroy'])->middleware('admin');

// ukuran admin controller
Route::resource('/admin/ukuran', AdminUkuranController::class)->middleware('admin');

// warna admin controller
Route::resource('/admin/warna', AdminWarnaController::class)->middleware('admin');

// user admin controller
Route::get('/admin/user', [AdminUserController::class, 'index'])->middleware('admin');
Route::get('/admin/user/{user}', [AdminUserController::class, 'user'])->middleware('admin');
Route::delete('/admin/user/{user}', [AdminUserController::class, 'destroy'])->middleware('admin');


// User
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
Route::resource('/alamat', AlamatController::class)->middleware('auth');

//checkout controller
Route::get('/checkout/{id?}', [CheckoutController::class, 'index'])->middleware('auth');
// Route::resource('/checkout', CheckoutController::class)->except(['index'])->middleware('auth');

//checkout controller
Route::resource('/pembayaran', PembayaranController::class)->middleware('auth');

//checkout controller
Route::resource('/pembayaran-selesai', SelesaiController::class)->middleware('auth');

// akunsaya controller
Route::resource('/akunsaya', AkunsayaController::class)->middleware('auth');

// riwayatpesanan controller
Route::resource('/riwayatpesanan', RiwayatpesananController::class)->middleware('auth');

// detailpesanan controller
Route::get('/detailpesanan/{id}', [DetailpesananController::class, 'index'])->middleware('auth');

// informasipribadi controller
Route::resource('/informasipribadi', InformasipribadiController::class)->middleware('auth');

// daftaralamat controller
Route::get('/daftaralamat', [DaftaralamatController::class, 'index'])->middleware('auth');

// kategori controller
Route::get('/search', [KategoriController::class, 'pencarian']);
Route::resource('/{pengguna?}/{jenis?}/{kategori?}', KategoriController::class);