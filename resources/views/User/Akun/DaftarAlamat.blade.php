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
  <div class="container py-4 px-5 d-flex gap-2">
    <!-- bagian kiri -->
    <div class="w-75 me-3">
      <div class="d-flex justify-content-between mb-2">
        <p class="fs-3 fw-bold">DAFTAR ALAMAT</p>
        <a href="#" class="fw-bold fs-s text-black ps-1 hover-black align-self-center"
          style="letter-spacing: 2px;">TAMBAH ALAMAT</a>
      </div>
      <!-- list alamat -->
      <p class="fw-bold fs-5">ALAMAT</p>
      <div class="d-flex flex-wrap gap-3">
        <!-- alamat -->
        <div class="w-43 bg-grey p-4">
          <p class="fw-bold">ALAMAT PENGIRIMAN</p>
          <p class="mb-0">nama depan nama belakang</p>
          <p class="mb-0">jalan</p>
          <p class="mb-0">Provinsi,kota,kecamatan,kabupaten,kode pos</p>
          <p class="mb-0">Indonesia</p>
          <p class="mb-2"><span class="fw-bold">Telepon: </span>081362549559</p>
          <a href="#" class="text-black fs-s fw-bold" style="letter-spacing: 2px;">EDIT ALAMAT</a>
          <p class="d-inline-block">|</p>
          <a href="#" class="text-black fs-s fw-bold" style="letter-spacing: 2px;">HAPUS ALAMAT</a>
        </div>
        <!-- akhir alamat -->
        <!-- alamat -->
        <div class="w-43 bg-grey p-4">
          <p class="fw-bold">ALAMAT PENGIRIMAN</p>
          <p class="mb-0">nama depan nama belakang</p>
          <p class="mb-0">jalan</p>
          <p class="mb-0">Provinsi,kota,kecamatan,kabupaten,kode pos</p>
          <p class="mb-0">Indonesia</p>
          <p class="mb-2"><span class="fw-bold">Telepon: </span>081362549559</p>
          <a href="#" class="text-black fs-s fw-bold" style="letter-spacing: 2px;">EDIT ALAMAT</a>
          <p class="d-inline-block">|</p>
          <a href="#" class="text-black fs-s fw-bold" style="letter-spacing: 2px;">HAPUS ALAMAT</a>
        </div>
        <!-- akhir alamat -->
        <!-- alamat -->
        <div class="w-43 bg-grey p-4">
          <p class="fw-bold">ALAMAT PENGIRIMAN</p>
          <p class="mb-0">nama depan nama belakang</p>
          <p class="mb-0">jalan</p>
          <p class="mb-0">Provinsi,kota,kecamatan,kabupaten,kode pos</p>
          <p class="mb-0">Indonesia</p>
          <p class="mb-2"><span class="fw-bold">Telepon: </span>081362549559</p>
          <a href="#" class="text-black fs-s fw-bold" style="letter-spacing: 2px;">EDIT ALAMAT</a>
          <p class="d-inline-block">|</p>
          <a href="#" class="text-black fs-s fw-bold" style="letter-spacing: 2px;">HAPUS ALAMAT</a>
        </div>
        <!-- akhir alamat -->
      </div>
      <!-- akhir list alamat -->
    </div>
    <!-- akhir bagian kiri -->
    <!-- bagian kanan -->
    <div class="w-25">
      <a href="AkunSaya.html" class="text-black d-block mb-3 hover-black">Akun Saya</a>
      <a href="InformasiPribadi.html" class="text-black d-block mb-3 hover-black">Informasi Pribadi</a>
      <a href="DataAlamat.html" class="fw-bold nav-link d-block mb-3">Data Alamat</a>
      <a href="RiwayatPesanan.html" class="text-black d-block mb-3 hover-black">Riwayat Pesanan</a>
      <a href="wishlist.html" class="text-black d-block mb-3 hover-black">Wish List</a>
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
</div>
@endsection

@section('script')
<script src="js/AkunSaya.js"></script>
@endsection