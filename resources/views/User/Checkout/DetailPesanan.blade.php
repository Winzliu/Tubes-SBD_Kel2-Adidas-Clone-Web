@extends('layouts.layoutCheckout')

@section('navbar')
<div class="d-flex pb-3 border-bottom border-2 border-dark">
  <p class="mb-0 fw-bold fs-vs me-2 bg-black rounded-circle text-white text-center" style="width: 20px">
    1
  </p>
  <p class="fw-bold mb-0 fs-vs" style="letter-spacing: 3px">
    DETAIL PESANAN
  </p>
</div>
<div class="d-flex pb-3 opacity-25">
  <p class="mb-0 fw-bold fs-vs me-2 bg-black rounded-circle text-white text-center" style="width: 20px">
    2
  </p>
  <p class="fw-bold mb-0 fs-vs" style="letter-spacing: 3px">
    ULAS & BAYAR
  </p>
</div>
<div class="d-flex pb-3 opacity-25">
  <p class="mb-0 fw-bold fs-vs me-2 bg-black rounded-circle text-white text-center" style="width: 20px">
    3
  </p>
  <p class="fw-bold mb-0 fs-vs" style="letter-spacing: 3px">
    PESANAN DIBUAT
  </p>
</div>
@endsection

@section('main')
<div class="mt-7 container">
  <div class="d-flex justify-content-center">
    <!-- sisi kiri -->
    <div class="mt-5">
      <p class="fw-bold fs-4 mb-0">DETAIL PENGIRIMAN</p>
      <p>Silakan masukkan alamat pengiriman Anda</p>
      {{-- tanda alamat berhasil di tambahkan --}}
      @if (session()->has('success'))
      <div class="alert alert-dark alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      {{-- akhir tanda alamat berhasil di tambahkan --}}
      @foreach ($alamats as $alamat)
      <!-- alamat -->
      <a href="/checkout/{{ $alamat->id }}"
        class="border-0 @if($alamat->id == $alamatpilihan) bg-grey @else bg-white @endif border-top border-bottom d-flex gap-4 px-4 py-2 text-black nav-link">
        <p class="fs-vs text-start">{{ $alamat->namaDepan }} {{ $alamat->namaBelakang }}</p>
        <div class="">
          <p class="mb-0 fs-vs text-start">{{ $alamat->namaJalan }}</p>
          <p class="mb-0 fs-vs text-start">
            {{ $alamat->provinsi }}, {{ $alamat->kota }}, {{ $alamat->kecamatan }}, {{ $alamat->kelurahan }}, {{
            $alamat->kodePos }}
          </p>
          <p class="mb-0 fs-vs text-start">
            <span class="fw-bold">Telepon : </span>{{ $alamat->nomorTelepon }}
          </p>
        </div>
      </a>
      <!-- akhir alamat -->
      @endforeach
      <!-- tambah alamat -->
      <a href="/tambahalamat" class="btn btn-dark rounded-0 py-2 px-4 my-3 fs-vs fw-bold">Tambah Alamat</a>
      <!-- akhir tambah alamat -->
      <!-- informasi lainnya -->
      <p class="fs-vs">
        <span class="fw-bold fs-vs">Email : </span>alwin.liufandi@gmail.com
      </p>
      <p class="fw-bold fs-4 mb-0 mt-5">METODE PENGIRIMAN</p>
      <div class="d-flex">
        <ion-icon class="pt-2 me-2" name="alert-circle-outline"></ion-icon>
        <div class="">
          <p class="fs-vs m-0">
            Produk akan dikirim dalam waktu 2-4 hari untuk wilayah
            Jabodetabek dan 4-14 hari untuk wilayah lainnya.
          </p>
          <a href="#" class="fs-vs m-0 text-black hover-black">
            Klik disini untuk wilayah yang sementara tidak dapat dijangkau
            untuk pengiriman
          </a>
        </div>
      </div>
      <div class="d-flex my-3">
        <ion-icon class="me-2" name="checkmark-outline"></ion-icon>
        <div class="d-flex w-100 justify-content-between pe-5">
          <p class="fs-vs fw-bold m-0">FLAT RATE</p>
          <p class="fs-vs m-0 text-danger">GRATIS</p>
        </div>
      </div>
      <!-- akhir informasi lainnya -->
      {{-- jika belum memilih alamat --}}
      @if($alamatpilihan == null)
      <div class="alert alert-danger fade show" role="alert">
        <strong>Pilih/Buat Alamat Terlebih Dahulu!!</strong>
      </div>
      @endif
      {{-- jika belum memilih alamat --}}
      <form action="/pembayaran" method="GET">
        @csrf
        <input type="hidden" name="alamat_id" id="alamat_id" value="{{ $alamatpilihan }}">
        <!-- button ulas & bayar -->
        <button type="submit"
          class="btn btn-dark @if($alamatpilihan == null) disabled @endif rounded-0 py-3 px-5 my-3 fs-vs fw-bold">
          ULAS & BAYAR --->
        </button>
        <!-- akhir button ulas & bayar -->
      </form>
    </div>
    <!-- akhir sisi kiri -->

    <!-- sisi kanan -->
    <div class="bg-grey mt-4 mb-3 mx-5 p-2">
      <!-- Ringkasan Pesanan -->
      <div class="d-flex justify-content-between">
        <p class="fs-s fw-bold mb-0">RINGKASAN PESANAN:</p>
        <a href="/keranjang" class="fs-vvs text-black align-self-center">Edit Bag</a>
      </div>
      <!-- akhir Ringkasan Pesanan -->
      <!-- harga pesanan -->
      <ul class="list-group bg-white rounded-0 mt-3">
        <li class="list-group-item fs-vs p-2">{{ $keranjangs->count() }} Produk
        </li>
        @php
        $jumlahHarga = 0
        @endphp
        @foreach ($keranjangs as $keranjang)
        <li class="list-group-item w-100 fs-vs p-2">
          <div class="d-flex w-100">
            <p class="m-0">
              <img src={{ asset("img/". $keranjang->produk->gambar->first()->gambar) }} width="50px" height="50px"
              alt="" />
            </p>
            <div class="fs-vvs ms-2 w-100">
              <a href="#" class="fw-bold text-black nav-link hover-line">{{ $keranjang->produk->nama }}</a>
              <p class="mb-0">Warna: <span class="text-uppercase">{{ $keranjang->produk->deskripsiWarna }}</span></p>
              <p class="mb-0">Size: {{ $keranjang->ukuran->ukuran }}</p>
              <p class="mb-0 text-end">
                {{ $keranjang->jumlahItem }} <span class="mx-1">x</span>
                <span class="fs-vs">Rp. {{ number_format($keranjang->produk->harga, 0,
                  ',', '.') }}</span>
              </p>
              <p class="mb-0 text-end">
                Total <span class="fs-vs">Rp. {{ number_format($keranjang->produk->harga * $keranjang->jumlahItem, 0,
                  ',', '.') }}</span>
              </p>
            </div>
          </div>
          @php
          $jumlahHarga += $keranjang->produk->harga * $keranjang->jumlahItem
          @endphp
        </li>
        @endforeach
        <li class="list-group-item fs-vs p-2">
          <div class="d-flex justify-content-between">
            <p class="m-0">Total Produk</p>
            <p class="m-0">Rp {{ number_format($jumlahHarga, 0,
              ',', '.') }}</p>
          </div>
        </li>
        <li class="list-group-item fs-vs p-2">
          <div class="d-flex justify-content-between">
            <p class="m-0">Pengiriman</p>
            <p class="m-0">GRATIS</p>
          </div>
        </li>
        <li class="list-group-item fs-vs p-2">
          <div class="d-flex justify-content-between fw-bold">
            <p class="m-0">
              Total <br />
              (Termasuk pajak)
            </p>
            <p class="m-0">Rp {{ number_format($jumlahHarga, 0,
              ',', '.') }}</p>
          </div>
        </li>
      </ul>
      <!-- akhir harga pesanan -->
      <!-- metode pengiriman -->
      <ul class="list-group bg-white rounded-0 mt-3">
        <li class="list-group-item p-2">
          <p class="fs-vs fw-bold mb-0">METODE PENGIRIMAN</p>
          <p class="fs-vvs mb-0">
            Flat Rate: <span class="fs-vs">GRATIS</span>
          </p>
        </li>
      </ul>
      <!-- akhir metode pengiriman -->
      <!-- need help? -->
      <div class="py-4 my-2">
        <p class="fw-bold fs-5">NEED HELP?</p>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Ordering</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Promotions & Vouchers</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Payment</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Delivery</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Returns and Refunds</a>
      </div>
      <!-- akhir need help? -->
    </div>
    <!-- akhir sisi kanan -->
  </div>
</div>
@endsection

@section('script')
<script src="js/checkout.js"></script>
@endsection