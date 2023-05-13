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
    <a class="text-dark fw-bold fs-6">Daftar Warna</a>
  </p>
  {{-- akhir path --}}
  <p class="text-center fs-2 fw-bold mb-5">DAFTAR WARNA</p>
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
  <div class="w-25 mb-5 m-auto">
    <form action="/admin/warna" method="POST" class="bg-light rounded-3 p-4">
      @csrf
      <label>Warna</label>
      <input class="form-control" type="text" id="warna" name="warna" required>
      <div class="d-flex justify-content-center mt-4">
        <button type="submit" class="btn btn-dark">Tambah</button>
      </div>
    </form>
  </div>

  <div class="">
    <table class="table table-bordered table-striped">
      <thead class="table-dark text-center">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Warna</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>

      <tbody class="text-center">
        @php
        $i = 1
        @endphp
        @foreach ($warnas as $warna)
        <tr>
          <th scope="row">{{ $i + (($warnas->currentPage()-1) * 10) }}</th>
          <td>{{ $warna->warna }}</td>
          <td>
            <button type="button" class="border-0 bg-transparent" data-bs-toggle="modal"
              data-bs-target="#exampleModal{{ $warna->id }}">
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
      {{ $warnas->links() }}
    </div>
  </div>
</div>

@foreach ($warnas as $warna)
<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $warna->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Warna</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fw-bold">
        <span class="fw-normal">Yakin Ingin Menghapus</span> "{{ $warna->warna }}"
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="/admin/warna/{{ $warna->id }}" method="POST" class="d-inline-block">
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