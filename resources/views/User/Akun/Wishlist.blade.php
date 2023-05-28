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
      @if(session()->has('errorKeranjang'))
      <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        <strong>{{ session('errorKeranjang') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
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
        @php
        $i=1
        @endphp
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
              <p class="text-danger fw-bold fs-vs my-2" id="produkTersedia{{ $i }}">NB: Jika Ukuran Tidak Tersedia Maka
                Stock
                Sedang
                Kosong</p>
            </div>
          </div>
          <!-- akhir sisi kiri -->
          <!-- sisi kanan -->
          <form action="/keranjang" method="POST">
            <div class="">
              @csrf
              <!-- ukuran -->
              <p class="fs-vvs fw-bold" style="letter-spacing: 3px;">PILIH SIZE</p>
              <div class="d-flex gap-3 mb-5">
                <select name="ukuran_id" id="ukuran{{ $i }}"
                  class="form-select bg-white border-1 border-dark rounded-0 w-auto fw-bold fs-vs"
                  aria-label="Default select example">
                  <option selected disabled>UKURAN</option>
                  @foreach ($wishlist->produk->produk_ukuran as $ukuran)
                  @if($ukuran->stock > 0)
                  <option value="{{ $ukuran->ukuran->id }}" data-stock="{{ $ukuran->stock }}">{{
                    $ukuran->ukuran->ukuran }}</option>
                  @endif
                  @endforeach
                </select>
                <select name="jumlahItem" id="jumlahItem{{ $i }}"
                  class="form-select bg-white border-1 border-dark rounded-0 w-auto fw-bold fs-vs"
                  aria-label="Default select example">
                  <option selected disabled>JUMLAH</option>
                </select>
              </div>
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
        @php
        $i++
        @endphp
        @endif
        @endforeach
      </div>
    </div>
    <!-- akhir main wishlist -->

    <!-- bagian kanan -->
    <div class="w-25 mt-4">
      <a href="/akunsaya" class="text-black d-block mb-3 hover-black">Akun Saya</a>
      <a href="/informasipribadi" class="text-black d-block mb-3 hover-black">Informasi Pribadi</a>
      <a href="/daftaralamat" class="text-black d-block mb-3 hover-black">Daftar Alamat</a>
      <a href="/riwayatpesanan" class="text-black d-block mb-3 hover-black">Riwayat Pesanan</a>
      <a href="/wishlist" class="fw-bold nav-link d-block">Wish List</a>
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


<script>
  for (let i = 1; i <= {{ $i }}; i++) {
    document.getElementById(`ukuran${i}`).addEventListener('change', function (e) {
      const jumlahUkuranPilihan = e.target.options[e.target.selectedIndex].dataset.stock;
      let tampung = "<option selected disabled>JUMLAH</option>";
  
      for (let index = 1; index <= jumlahUkuranPilihan; index++) {
        tampung += `<option value="${index}">${index}</option>`;
      }
  
      document.getElementById(`jumlahItem${i}`).innerHTML = tampung;
  
      document.getElementById(`produkTersedia${i}`).innerHTML = `${jumlahUkuranPilihan} Produk Tersisa`
    })
  }
</script>
@endsection