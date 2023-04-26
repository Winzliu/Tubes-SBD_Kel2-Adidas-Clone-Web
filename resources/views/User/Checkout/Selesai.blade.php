@extends('layouts.layoutCheckout')

@section('navbar')
<div class="d-flex pb-3">
  <p class="mb-0 fw-bold fs-vs me-2 bg-black rounded-circle text-white text-center" style="width: 20px">
    1
  </p>
  <p class="fw-bold mb-0 fs-vs" style="letter-spacing: 3px">
    DETAIL PESANAN
  </p>
</div>
<div class="d-flex pb-3">
  <p class="mb-0 fw-bold fs-vs me-2 bg-black rounded-circle text-white text-center" style="width: 20px">
    2
  </p>
  <p class="fw-bold mb-0 fs-vs" style="letter-spacing: 3px">
    ULAS & BAYAR
  </p>
</div>
<div class="d-flex pb-3 border-bottom border-2 border-dark">
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
    <!-- sisi kanan -->
    <div class="bg-grey mt-4 mb-3 mx-5 p-2 w-100">
      <!-- Ringkasan Pesanan -->
      <div class="d-flex justify-content-between w-100">
        <p class="fs-3 fw-bold mb-0 text-center w-100">PEMBAYARAN BERHASIL!!</p>
      </div>
      <!-- akhir Ringkasan Pesanan -->
      <!-- harga pesanan -->
      <ul class="list-group bg-white rounded-0 mt-3">
        <li class="list-group-item fs-vs p-2">{{ $produks->count() }} Produk</li>
        <li class="list-group-item fs-vs p-2">
          <div class="d-flex justify-content-between">
            <p class="m-0">Total Produk</p>
            <p class="m-0">Rp {{ number_format($produks->first()->pesanan->totalHarga, 0,
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
            <p class="m-0">Rp {{ number_format($produks->first()->pesanan->totalHarga, 0,
              ',', '.') }}</p>
          </div>
        </li>
        @foreach ($produks as $produk)
        <li class="list-group-item fs-vs p-2">
          <div class="d-flex">
            <div class="fs-vvs ms-2 w-25">
              <a href="#" class="fw-bold text-black nav-link hover-line">{{ $produk->nama }}</a>
              <p class="mb-0">Warna: <span class="text-uppercase">{{ $produk->warna }}</span></p>
              <p class="mb-0">Size: {{ $produk->ukuran }}</p>
              <p class="mb-0 text-end">
                {{ $produk->jumlahItem }} <span class="mx-1">x</span>
                <span class="fs-vs">Rp. {{ number_format($produk->harga, 0,
                  ',', '.') }}</span>
              </p>
              <p class="mb-0 text-end">
                Total <span class="fs-vs">Rp. {{ number_format($produk->harga * $produk->jumlahItem, 0,
                  ',', '.') }}</span>
              </p>
            </div>
          </div>
        </li>
        @endforeach
      </ul>
      <!-- akhir harga pesanan -->
      <!-- metode pengiriman -->
      <ul class="list-group bg-white rounded-0 mt-3">
        <li class="list-group-item p-2">
          <p class="fs-vs fw-bold mb-0">DETAIL PENGIRIMAN</p>
          <p class="fs-vs mb-0">{{ $produks->first()->pesanan->namaDepan }} {{
            $produks->first()->pesanan->namaBelakang }}</p>
          <p class="fs-vs mb-0">{{ $produks->first()->pesanan->namaJalan }}</p>
          <p class="fs-vs mb-0">{{ $produks->first()->pesanan->provinsi }}</p>
          <p class="fs-vs mb-0">{{ $produks->first()->pesanan->kota }}, {{
            $produks->first()->pesanan->kecamatan }}</p>
          <p class="fs-vs mb-0">{{ $produks->first()->pesanan->kelurahan }}, {{
            $produks->first()->pesanan->kodePos }}</p>
          <p class="fs-vs mb-0">{{ $produks->first()->pesanan->negara }}</p>
          <p class="fs-vs mb-0">Telepon : {{ $produks->first()->pesanan->nomorTelepon }}</p>
        </li>
      </ul>
      <!-- akhir metode pengiriman -->
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
      <!-- button kembali -->
      <a href="/" class="bg-black fw-bold py-2 px-4 mt-3 d-block rounded-0 text-white">
        Kembali Belanja
      </a>
      <!-- akhir button kembali -->
    </div>
    <!-- akhir sisi kanan -->
  </div>
</div>
@endsection

@section('script')
<script src="js/checkout.js"></script>
@endsection