<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Produk Adidas</title>
  <link rel="stylesheet" href={{ asset("css/bootstrap.css") }}>
</head>

<body>
  <div class="container p-4">
    <p class="fw-bold fs-2 text-center">Daftar Produk</p>

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show w-25 m-auto text-center" role="alert">
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
    <form action="" method="GET" class="d-flex position-relative mb-2 border-0 m-auto mt-5 shadow-lg"
      style="width: 26%">
      @csrf
      <input class="form-control rounded-0 border-0 py-2 px-3 fs-vs " value="{{ request()->pencarian }}"
        name="pencarian" style="width: 100%" type="text" placeholder="Cari.." aria-label="Search" />
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
          <th scope="col" colspan="4" class="w-25">Actions</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i = 1
        @endphp
        @foreach ($produks as $produk)
        <tr class="fw-bold">
          <th scope="row">{{ $i }}</th>
          <td><img src="{{ asset('img/'. $produk->gambar->first()->gambar) }}" style="width: 50px" alt="">
          </td>
          <td>{{ $produk->nama }}</td>
          <td class="text-uppercase">{{ $produk->warna->warna }}</td>
          <td>{{ $produk->stock }}</td>
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
            <a href="">
              <ion-icon class="btn btn-danger me-3 fs-5" style="height: 25px" name="trash-outline">
              </ion-icon>
            </a>
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


  <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.js.map') }}"></script>
  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  <!-- ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>