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
      <div class="d-flex justify-content-between">
        <p class="fs-s fw-bold mb-0">RINGKASAN PESANAN:</p>
        <a href="#" class="fs-vvs text-black align-self-center">Edit Bag</a>
      </div>
      <!-- akhir Ringkasan Pesanan -->
      <!-- harga pesanan -->
      <ul class="list-group bg-white rounded-0 mt-3">
        <li class="list-group-item fs-vs p-2">2 Produk</li>
        <li class="list-group-item fs-vs p-2">
          <div class="d-flex justify-content-between">
            <p class="m-0">Total Produk</p>
            <p class="m-0">Rp 4.100.000</p>
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
            <p class="m-0">Rp 4.100.000</p>
          </div>
        </li>
        <li class="list-group-item fs-vs p-2">
          <div class="d-flex">
            <p class="m-0">
              <img src="img/Produk1.1.jpeg" width="50px" height="50px" alt="" />
            </p>
            <div class="fs-vvs ms-2">
              <a href="#" class="fw-bold text-black nav-link hover-line">TAS PINGGANG ADICOLOR CLASS</a>
              <p class="mb-0">HK2627</p>
              <p class="mb-0">Warna: Multicolor</p>
              <p class="mb-0">Size: NSUK</p>
              <p class="mb-0 text-end">
                1 <span class="mx-1">x</span>
                <span class="fs-vs">Rp. 344.500</span>
              </p>
              <p class="mb-0 text-end">
                Total <span class="fs-vs">Rp. 344.500</span>
              </p>
            </div>
          </div>
        </li>
      </ul>
      <!-- akhir harga pesanan -->
      <!-- metode pengiriman -->
      <ul class="list-group bg-white rounded-0 mt-3">
        <li class="list-group-item p-2">
          <p class="fs-vs fw-bold mb-0">DETAIL PENGIRIMAN</p>
          <p class="fs-vs mb-0">nama depan nama belakang</p>
          <p class="fs-vs mb-0">nama jalan</p>
          <p class="fs-vs mb-0">provinsi</p>
          <p class="fs-vs mb-0">kota, kecamatan</p>
          <p class="fs-vs mb-0">kelurahan, kode pos</p>
          <p class="fs-vs mb-0">Indonesia</p>
          <p class="fs-vs mb-0">Telepon : 0812345678</p>
          <a href="checkout1.html" class="text-dark fs-vs mb-0">Edit</a>
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
      <a href="index.html" class="bg-black fw-bold py-2 px-4 mt-3 d-block rounded-0 text-white">
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