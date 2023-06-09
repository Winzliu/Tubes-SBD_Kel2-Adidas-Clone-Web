@extends('Admin.layout.layoutAdmin')

@section('main')
<div class="container p-5">
  {{-- path --}}
  <p class="mb-0">
    /
    <a href="/admin" class="text-dark fw-bold fs-6">Admin</a>
    /
    <a class="text-dark fw-bold fs-6">Daftar Produk</a>
  </p>
  {{-- akhir path --}}
  <p class="fw-bold fs-2 text-center">Daftar Produk</p>

  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show w-50 m-auto text-center" role="alert">
    <strong>{{ session('success') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  {{-- tambah produk baru --}}
  <form action="/admin/produks/create" method="GET">
    @csrf
    <div class="d-flex w-40 justify-content-between m-auto rounded-3 p-2 mt-5 shadow-lg bg-black text-white">
      <div class="d-flex gap-4">
        <p class="fw-bold fs-6 mt-2 mb-0">Jumlah Gambar Produk : </p>
        <select class="form-select bg-light" name="gambar" style="height: 40px; width: 70px"
          aria-label="Default select example">
          <option value="1" selected>1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
      </div>
      <button type="submit" class="btn btn-light fw-bold" style="width: 160px; height: 40px;">
        <ion-icon name="add-outline" class="fs-vs"></ion-icon>Tambah Produk
      </button>
    </div>
  </form>
  {{-- akhir tambah produk baru --}}

  {{-- search --}}
  <form action="" method="GET" class="d-flex position-relative mb-2 border-0 m-auto mt-5 shadow-lg" style="width: 26%">
    @csrf
    <input class="form-control rounded-0 border-0 py-2 px-3 fs-vs " value="{{ request()->pencarian }}" name="pencarian"
      style="width: 100%" type="text" placeholder="Cari.." aria-label="Search" />
    <button class="border-0 bg-dark text-white position-absolute end-0 h-100 px-2" type="submit">
      <ion-icon name="search-outline"></ion-icon>
    </button>
  </form>
  {{-- akhir search --}}

  {{-- daftar produk --}}
  <table class="table mt-5 table-striped text-center">
    <thead class="table-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col" colspan="2" class="w-25">Nama Produk</th>
        <th scope="col">Warna</th>
        <th scope="col">Stock</th>
        <th scope="col" colspan="4" class="w-25">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @php
      $i = 1
      @endphp
      @foreach ($produks as $produk)
      <tr class="fw-bold">
        <th scope="row">{{ $i + (($produks->currentPage()-1) * 5) }}</th>
        <td><img src="{{ asset('img/'. $produk->gambar->first()->gambar) }}" style="width: 50px" alt="">
        </td>
        <td>{{ $produk->nama }}</td>
        <td class="text-uppercase">{{ $produk->warna->warna }}</td>
        @php
        $stock = 0
        @endphp
        @foreach($produk->produk_ukuran as $produk_ukuran)
        @php
        $stock += $produk_ukuran->stock
        @endphp
        @endforeach
        <td>{{ $stock }}</td>
        <td>
          <a href="/produk/{{ Str::slug($produk->nama) }}/{{ $produk->warna->warna }}">
            <ion-icon class="btn btn-secondary me-3 fs-5" style="height: 25px" name="reader-outline"></ion-icon>
          </a>
        </td>
        <td>
          <a href="/admin/variasi/{{ $produk->id }}">
            <ion-icon class="btn btn-success me-3 fs-5" style="height: 25px" name="add-circle-outline"></ion-icon>
          </a>
        </td>
        <td>
          <a href="/admin/produks/{{ $produk->id }}/edit">
            <ion-icon class="btn btn-warning me-3 fs-5" style="height: 25px" name="create-outline"></ion-icon>
          </a>
        </td>
        <td>
          <button type="button" class="border-0 bg-transparent" data-bs-toggle="modal"
            data-bs-target="#exampleModal{{ $produk->id }}">
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
  {{-- akhir daftar produk --}}

  <div class="d-flex justify-content-center ">
    {{ $produks->links() }}
  </div>
</div>

@foreach ($produks as $produk)
<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $produk->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Produk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fw-bold">
        <span class="fw-normal">Yakin Ingin Menghapus</span> "{{ $produk->nama }} (<span class="text-uppercase">{{
          $produk->warna->warna }}</span>)"
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="/admin/produks/{{ $produk->id }}" method="POST" class="d-inline-block">
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