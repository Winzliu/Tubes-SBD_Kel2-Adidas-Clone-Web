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
<div class="d-flex pb-3 border-bottom border-2 border-dark">
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
    <div class="mt-5 w-50">
      <div class="d-flex justify-content-between">
        <p class="fw-bold fs-3 mb-0">METODE PEMBAYARAN</p>
        <p class="fs-vvs align-self-center m-0">
          Semua Transaksi Aman dan Terjamin
        </p>
      </div>
      <p class="fs-vs">
        Harap pilih metode pembayaran dengan hati-hati. Setelah memilih
        metode pembayaran dan submit, perubahan apapun akan membatalkan
        pesanan dan mengosongkan keranjang belanja anda.
      </p>
      <!-- gambar payment -->
      <button href="#" class="border-0 bg-white border-top border-bottom px-4 py-2 w-100 alamat text-black nav-link">
        <p class="fw-bold fs-5">CREDIT CARD / DEBIT CARD ONLINE *</p>
        <div class="d-flex gap-4">
          <img src="img/pembayaran2.jpeg" width="200px" height="40px" class="d-block" alt="" />
          <p class="fs-vs">
            *Pastikan kartu debit berlogo MasterCard / Visa telah diaktivasi
            untuk pembelanjaan online
          </p>
        </div>
      </button>
      <!-- akhir gambar payment -->
      <!-- gambar payment -->
      <button href="#" class="border-0 bg-white border-top border-bottom px-4 py-2 w-100 alamat text-black nav-link">
        <p class="fw-bold fs-5">ONLINE PAYMENT</p>
        <img src="img/pembayaran1.jpeg" width="500px" class="d-block" alt="" />
        <p class="fs-vs">
          *Maksimal transaksi untuk QRIS adalah IDR 2.000.000,-
        </p>
      </button>
      <!-- akhir gambar payment -->
      <a href="checkout3.html" class="bg-black fw-bold py-2 px-4 mt-3 rounded-0 text-white">
        PESAN SEKARANG ---->
      </a>
      <p class="fs-s mt-2 w-75 text-muted">
        Dengan mengeklik Pesan Sekarang Anda menyetujui
        <a href="#" class="text-muted">Syarat Pengiriman</a>. Semua
        transaksi aman dan terjamin
      </p>
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
      <!-- button selesai -->
      <div class="py-4 my-2">
        <p class="fw-bold fs-5">NEED HELP?</p>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Ordering</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Promotions & Vouchers</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Payment</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Delivery</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Returns and Refunds</a>
      </div>
      <!-- akhir button selesai -->
    </div>
    <!-- akhir sisi kanan -->
  </div>
</div>
@endsection

@section('script')
<script src="js/checkout.js"></script>
@endsection