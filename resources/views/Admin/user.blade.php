@extends('Admin.layout.layoutAdmin')

@section('css')
<style>
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
    <a class="text-dark fw-bold fs-6">Daftar User</a>
  </p>
  {{-- akhir path --}}
  <p class="text-center fs-2 fw-bold mb-5">DAFTAR USER</p>
  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show w-50 mb-3 m-auto text-center" role="alert">
    <strong>{{ session('success') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  @if (session()->has('error'))
  <div class="alert alert-danger alert-dismissible fade show w-50 mb-3 m-auto text-center" role="alert">
    <strong>{{ session('error') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <form action="/admin/user" method="GET" class="d-flex w-25 gap-4 p-4 bg-light rounded-3 m-auto mb-4">
    @csrf
    <input class="form-control" value="@if(request()->query('pencarian')) {{request()->query('pencarian')}} @endif"
      type="text" name="pencarian" id="pencarian" placeholder="Cari....">
    <button type=" submit" class="btn btn-dark">Cari</button>
  </form>

  <div class="">
    <table class="table table-bordered table-striped">
      <thead class="table-dark text-center">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>

      <tbody class="text-center">
        @php
        $i = 1
        @endphp
        @foreach ($users as $user)
        <tr>
          <th scope="row">{{ $i + (($users->currentPage()-1) * 5) }}</th>
          <td>{{ $user->namaDepan }} {{ $user->namaBelakang }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->gender }}</td>
          <td>
            <a href="/admin/user/{{ $user->id }}" class="nav-link d-inline">
              <ion-icon class="btn btn-secondary me-3 fs-5" style="height: 25px" name="reader-outline"></ion-icon>
            </a>
            <button type="button" class="border-0 bg-transparent" data-bs-toggle="modal"
              data-bs-target="#exampleModal{{ $user->id }}">
              <ion-icon class="btn btn-danger me-3 fs-5" style="height: 25px" name="trash-outline">
              </ion-icon>
            </button>
          </td>
        </tr>
        @php
        $i++
        @endphp
        @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-center ">
      {{ $users->links() }}
    </div>
  </div>
</div>

@foreach ($users as $user)
<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fw-bold">
        <span class="fw-normal">Yakin Ingin Menghapus</span> "{{ $user->namaDepan }} {{ $user->namaBelakang }}({{
        $user->email }})"
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="/admin/user/{{ $user->id }}" method="POST" class="d-inline-block">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">
            Hapus
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection