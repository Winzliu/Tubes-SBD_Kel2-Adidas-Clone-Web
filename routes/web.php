<?php

use App\Models\Gambar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UlasanController;
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

// Route::get('/', function () {
//     return view('User.index', [
//         'title'  => 'Adidas',
//         'gambar' => Gambar::first()
//     ]);
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/{slug}/{warna}', [ProdukController::class, 'index']);

Route::post('/ulasan', [UlasanController::class, 'store']);

Route::get('/pria', function () {
    return view('User.kategori', [
        'title' => 'Adidas'
    ]);
});

Route::get('/AkunSaya', function () {
    return view('User.Akun.AkunSaya', [
        'title' => 'Akun Saya'
    ]);
});

Route::resource('/registrasi', RegistrasiController::class)->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::resource('/login', LoginController::class)->except(['index']);

Route::match(['get', 'post'], '/logout', [LoginController::class, 'logout'])->middleware('auth');