<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('User.index', [
        'title' => 'Adidas'
    ]);
});

Route::get('/AkunSaya', function () {
    return view('User.Akun.AkunSaya', [
        'title' => 'Akun Saya'
    ]);
});

Route::resource('/registrasi', RegistrasiController::class)->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware(('guest'));
Route::post('/login', [LoginController::class, 'store'])->middleware(('guest'));
// Route::resource('/login', LoginController::class);

Route::match(['get', 'post'], '/logout', [LoginController::class, 'logout'])->middleware('auth');