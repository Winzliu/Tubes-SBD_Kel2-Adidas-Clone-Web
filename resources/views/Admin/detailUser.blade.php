@extends('Admin.layout.layoutAdmin')

@section('main')
<div class="w-100 p-5">
  {{-- path --}}
  <p>
    /
    <a href="/admin" class="text-dark fw-bold fs-6">Admin</a>
    /
    <a href="/admin/user" class="text-dark fw-bold fs-6">Daftar User</a>
    /
    <a class="text-dark fw-bold fs-6">Detail User</a>
  </p>
  {{-- akhir path --}}
  <p class="text-center fs-2 fw-bold mb-5">Profil {{ $user->namaDepan }}</p>
  <div class="mb-5 m-auto d-flex justify-content-center w-50 gap-4 flex-wrap">
    <div class="w-43 text-center">
      <label>Nama Lengkap : </label>
      <input class="form-control text-center" value="{{ $user->namaDepan }} {{ $user->namaBelakang }}" type="text"
        id="size" name="nama" required disabled>
    </div>
    <div class="w-43 text-center">
      <label>Email : </label>
      <input class="form-control text-center" value="{{ $user->email }}" type="text" id="email" name="email" required
        disabled>
    </div>
    <div class="w-43 text-center">
      <label>Nomor Telepon : </label>
      <input class="form-control text-center" value="{{ $user->nomorTelepon }}" type="text" id="nomorTelepon"
        name="nomorTelepon" required disabled>
    </div>
    <div class="w-43 text-center">
      <label>Tanggal Lahir : </label>
      <input class="form-control text-center" value="{{ date('d-M-Y',strtotime($user->tanggalLahir)) }}" type="text"
        id="tanggalLahir" name="tanggalLahir" required disabled>
    </div>
    <div class="w-43 text-center">
      <label>Gender : </label>
      <input class="form-control text-center" value="{{ $user->gender }}" type="text" id="tanggalLahir"
        name="tanggalLahir" required disabled>
    </div>
  </div>
  <div class="d-flex justify-content-center">
    <a href="/admin/user" class="btn btn-danger fs-5">
      Kembali</a>
  </div>
  @endsection