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
        @if($wishlist->user_id == auth()->user()->id && $wishlist->produk->stock > 0)
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
          <form action="/keranjang" method="POST">
            <div class="">
              @csrf
              <!-- ukuran -->
              <p class="fs-vvs fw-bold" style="letter-spacing: 3px;">PILIH SIZE</p>
              <div class="d-flex gap-3">
                <select name="ukuran_id"
                  class="form-select bg-white border-1 border-dark rounded-0 w-auto fw-bold fs-vs"
                  aria-label="Default select example">
                  <option selected disabled>UKURAN</option>
                  @foreach ($wishlist->produk->produk_ukuran as $ukurans)
                  <option value="{{ $ukurans->ukuran->id }}">{{ $ukurans->ukuran->ukuran }}</option>
                  @endforeach
                </select>
                <select name="jumlahItem"
                  class="form-select bg-white border-1 border-dark rounded-0 w-auto fw-bold fs-vs"
                  aria-label="Default select example">
                  <option selected disabled>JUMLAH</option>
                  @for ($i = 1; $i <= $wishlist->produk->stock; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
              </div>
              <p class="text-danger fw-bold fs-vs my-2">{{ $wishlist->produk->stock }} Stock Tersisa</p>
              <!-- akhir ukuran -->
              @error('ukuran_id')
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Pilih Ukuran Yang Diinginkan</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @enderror

              @error('jumlahItem')
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Pilih Jumlah Item Yang Diinginkan</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @enderror

              <input type="hidden" name="produk_id" value="{{ $wishlist->produk->id }}">
              <!-- tambah keranjang -->
              <button type="submit" class="btn btn-dark rounded-0 w-100 fs-s fw-bold">
                TAMBAHKAN KE KERANJANG --->
              </button>
              <!-- akhir tambah keranjang -->
            </div>
            <!-- akhir sisi kanan -->
        </div>
        </form>
        <!-- akhir wishlist pertama -->
        @endif
        @endforeach
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