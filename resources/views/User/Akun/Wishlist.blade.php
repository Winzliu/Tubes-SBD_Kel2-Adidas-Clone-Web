@extends('layouts.layoutIndex')

@section('main')
<div class="mt-7">
  <!-- 3 navbar -->
  <div class="d-flex justify-content-center border-bottom gap-5" id="1">
    <a class="nav-link hover-line fs-s py-2">GRATIS ONGKIR UNTUK PESANAN MIN. 900RB</a>
    <a class="nav-link hover-line fs-s py-2">CHAT DENGAN KAMI</a>
    <a class="nav-link hover-line fs-s py-2">CICILAN AKULAKU TERSEDIA SEKARANG!</a>
  </div>
  <!-- akhir 3 navbar -->
  <!--  wishlist -->
  <div class="d-flex container">
    <div class="w-72 ps-5 mx-4">
      <!-- header wishlist -->
      <div class="d-flex justify-content-between mt-4">
        <p class="fs-4 fw-bold align-self-center">WISHLIST SAYA</p>
        <form action="/wishlist/deleteall" method="POST">
          @method('delete')
          @csrf
          <button type="submit"
            class="fs-vvs fw-bold hover-black text-black align-self-center border-0 bg-transparent">HAPUS
            WISHLIST</button>
        </form>
      </div>
      <!-- akhir header wishlist -->
      <!-- main wishlist -->
      <div class="border-bottom border-top border-4 border-secondary mb-4">
        @foreach ($wishlists as $wishlist)
        @if($wishlist->user_id == auth()->user()->id)
        <!-- wishlist pertama -->
        <div class="d-flex px-2 py-3 border-bottom border- 1 justify-content-between">
          <!-- sisi kiri -->
          <div class="d-flex gap-4">
            <a href="/produk/{{ Str::slug($wishlist->produk->nama) }}/{{ $wishlist->produk->warna->warna }}">
              <img src="{{ asset('img/' . $wishlist->produk->gambar->first()->gambar) }}" width="150px" height="150px"
                alt="">
            </a>
            <div class="">
              <p class="fs-vs fw-bold mb-0">{{ $wishlist->produk->nama }}</p>
              <p class="fs-vs mb-0">Color : <span class="text-uppercase">{{ $wishlist->produk->deskripsiWarna }}</span>
              </p>
              <p class="fs-vs mb-0">Tersedia</p>
              <form action="/wishlist/{{ $wishlist->id }}" method="POST">
                @method('delete')
                @csrf
                <button type="submit" class="fs-vs mb-0 hover-black text-black border-0 bg-transparent">Remove</button>
              </form>
            </div>
          </div>
          <!-- akhir sisi kiri -->
          <!-- sisi kanan -->
          <div class="">
            <!-- ukuran -->
            <p class="fs-vvs fw-bold" style="letter-spacing: 3px;">PILIH SIZE</p>
            <div class="d-flex">
              <select class="form-select bg-white border-1 border-dark rounded-0 w-auto fw-bold fs-vs"
                aria-label="Default select example">
                <option selected>UKURAN</option>
                @foreach ($wishlist->produk->produk_ukuran as $ukurans)
                <option value="{{ $ukurans->ukuran->ukuran }}">{{ $ukurans->ukuran->ukuran }}</option>
                @endforeach
              </select>
            </div>
            <p class="text-danger fw-bold fs-vs my-2">Low Stock</p>
            <!-- akhir ukuran -->

            <!-- tambah keranjang -->
            <button type="button" class="btn btn-dark rounded-0 w-100 fs-s fw-bold p-3">
              TAMBAHKAN KE KERANJANG --->
            </button>
            <!-- akhir tambah keranjang -->
          </div>
          <!-- akhir sisi kanan -->
        </div>
        <!-- akhir wishlist pertama -->
        @endif
        @endforeach

        {{--
        <!-- wishlist kedua -->
        <div class="d-flex px-2 py-3 border-bottom border- 1 justify-content-between">
          <!-- sisi kiri -->
          <div class="d-flex gap-4">
            <a href="#">
              <img src="img/Produk1.2.jpeg" width="150px" height="150px" alt="">
            </a>
            <div class="">
              <p class="fs-vs fw-bold mb-0">SEPATU SAMBA OG</p>
              <p class="fs-vs mb-0">Color : Black/White/Beige</p>
              <p class="fs-vs mb-0">Tersedia</p>
              <a href="#" class="fs-vs mb-0 hover-black text-black">Remove</a>
            </div>
          </div>
          <!-- akhir sisi kiri -->
          <!-- sisi kanan -->
          <div class="">
            <!-- ukuran -->
            <p class="fs-vvs fw-bold" style="letter-spacing: 3px;">PILIH SIZE</p>
            <div class="d-flex">
              <select class="form-select bg-white border-1 border-dark rounded-0 w-auto fw-bold fs-vs me-2 py-2"
                aria-label="Default select example">
                <option value="UK" selected>UK</option>
                <option value="2">EUROPE</option>
                <option value="3">US</option>
              </select>
              <select class="form-select bg-white border-1 border-dark rounded-0 w-auto fw-bold fs-vs"
                aria-label="Default select example">
                <option selected>UKURAN</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
            <p class="text-danger fw-bold fs-vs my-2">Low Stock</p>
            <!-- akhir ukuran -->

            <!-- tambah keranjang -->
            <button type="button" class="btn btn-dark rounded-0 w-100 fs-s fw-bold p-3">
              TAMBAHKAN KE KERANJANG --->
            </button>
            <!-- akhir tambah keranjang -->
          </div>
          <!-- akhir sisi kanan -->
        </div>
        <!-- akhir wishlist kedua --> --}}
      </div>
    </div>
    <!-- akhir main wishlist -->

    <!-- bagian kanan -->
    <div class="w-25 mt-4">
      <a href="AkunSaya.html" class="text-black d-block mb-3 hover-black">Akun Saya</a>
      <a href="InformasiPribadi.html" class="text-black d-block mb-3 hover-black">Informasi Pribadi</a>
      <a href="DataAlamat.html" class="text-black d-block mb-3 hover-black">Data Alamat</a>
      <a href="RiwayatPesanan.html" class="text-black d-block mb-3 hover-black">Riwayat Pesanan</a>
      <a href="wishlist.html" class="fw-bold nav-link d-block">Wish List</a>
      <hr>
      <!-- need help? -->
      <div class=" py-4 my-2">
        <p class="fw-bold fs-5">NEED HELP?</p>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Ordering</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Promotions & Vouchers</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Payment</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Delivery</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Returns and Refunds</a>
      </div>
      <!-- akhir need help? -->
    </div>
    <!-- akhir bagian kanan -->
  </div>
  <!-- akhir  wishlist -->
</div>
@endsection

@section('script')
<script src="js/AkunSaya.js"></script>
@endsection