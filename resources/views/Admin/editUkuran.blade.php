@extends('Admin.layout.layoutAdmin')

@section('css')
<style>
  form {
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }

  label {
    display: block;
    margin-bottom: 10px;
    font-size: 18px;
    font-weight: bold;
    color: #555;
  }

  input[type="size"],
  input[type="jenis"] {
    display: block;
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    margin-bottom: 20px;
  }
</style>
@endsection

@section('main')
<div class="w-100 p-5">
  {{-- path --}}
  <p>
    /
    <a href="/admin" class="text-dark fw-bold fs-6">Admin</a>
    /
    <a href="/admin/ukuran" class="text-dark fw-bold fs-6">Daftar Ukuran</a>
    /
    <a class="text-dark fw-bold fs-6">Edit Ukuran</a>
  </p>
  {{-- akhir path --}}
  <p class="text-center fs-2 fw-bold mb-5">EDIT UKURAN</p>
  <div class="w-25 mb-5 m-auto">
    <form action="/admin/ukuran/{{ $ukuran->id }}" method="POST">
      @csrf
      @method('put')
      <label>Ukuran</label>
      <input class="form-control" value="{{ $ukuran->ukuran }}" type="text" id="size" name="ukuran" required>
      <label>Jenis</label>
      <input class="form-control" value="{{ $ukuran->jenis }}" type="text" id="jenis" name="jenis" required>
      <div class="d-flex justify-content-center mt-4 gap-4">
        <a href="/admin/ukuran" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-dark">Edit</button>
      </div>
    </form>
  </div>
  @endsection