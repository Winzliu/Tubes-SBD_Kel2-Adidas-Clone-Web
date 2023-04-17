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
      <!-- alamat -->
      <a href="#" class="border-0 bg-white border-top border-bottom d-flex gap-4 px-4 py-2 alamat text-black nav-link">
        <p class="fs-vs text-start">nama depan nama belakang</p>
        <div class="">
          <p class="mb-0 fs-vs text-start">nama jalan</p>
          <p class="mb-0 fs-vs text-start">
            provinsi, kab/kota, kecamatan, kelurahan, kode pos
          </p>
          <p class="mb-0 fs-vs text-start">
            <span class="fw-bold">Telepon : </span>081362549559
          </p>
        </div>
      </a>
      <!-- akhir alamat -->
      <!-- alamat -->
      <a href="#" class="border-0 bg-white border-top border-bottom d-flex gap-4 px-4 py-2 alamat text-black nav-link">
        <p class="fs-vs text-start">nama depan nama belakang</p>
        <div class="">
          <p class="mb-0 fs-vs text-start">nama jalan</p>
          <p class="mb-0 fs-vs text-start">
            provinsi, kab/kota, kecamatan, kelurahan, kode pos
          </p>
          <p class="mb-0 fs-vs text-start">
            <span class="fw-bold">Telepon : </span>081362549559
          </p>
        </div>
      </a>
      <!-- akhir alamat -->
      <!-- tambah alamat -->
      <a href="tambahAlamat.html" class="btn btn-dark rounded-0 py-2 px-4 my-3 fs-vs fw-bold">Tambah Alamat</a>
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
      <!-- button ulas & bayar -->
      <a href="checkout2.html" class="btn btn-dark rounded-0 py-3 px-5 my-3 fs-vs fw-bold">
        ULAS & BAYAR --->
      </a>
      <!-- akhir button ulas & bayar -->
    </div>
    <!-- akhir sisi kiri -->

    <!-- sisi kanan -->
    <div class="bg-grey mt-4 mb-3 mx-5 p-2">
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