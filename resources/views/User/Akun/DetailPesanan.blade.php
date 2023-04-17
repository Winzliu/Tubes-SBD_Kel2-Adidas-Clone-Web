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
      <div class="d-flex justify-content-between mb-4">
        <p class="fs-3 fw-bold">HALO ALWIN</p>
        <p class="align-self-center">Bukan Alwin? <a href="#" class="fw-bold text-black ps-1 hover-black"
            style="letter-spacing: 2px;">Keluar</a></p>
      </div>
      <!-- Pesanan Baru Baru Ini -->
      <p class="fw-bold fs-3 mb-1">OEDER #1 - STATUS</p>
      <p class="mb-1">Tentang Pesanan Ini:</p>
      <p class="fw-bold mb-1">Informasi Pesanan</p>
      <hr>
      <p>Tanggal Pesanan: 17 April 2023</p>
      <!-- alamat -->
      <div class="d-flex">
        <div class="bg-grey p-4">
          <p class="fw-bold">ALAMAT PENGIRIMAN</p>
          <p class="mb-0">nama depan nama belakang</p>
          <p class="mb-0">jalan</p>
          <p class="mb-0">Provinsi,kota,kecamatan,kabupaten,kode pos</p>
          <p class="mb-0">Indonesia</p>
          <p class="mb-2"><span class="fw-bold">Telepon: </span>081362549559</p>
        </div>
        <div class="bg-grey p-4">
          <p class="fw-bold">METODE PENGIRIMAN</p>
          <p class="mb-0">GRATIS</p>
        </div>
        <div class="bg-grey p-4">
          <p class="fw-bold">METODE PEMBAYARAN</p>
          <p class="mb-0">KREDIT CARD</p>
        </div>
      </div>
      <!-- akhir alamat -->
      <!-- item yang dipesan -->
      <p class="fw-bold fs-3">ITEM DIPESAN</p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Kuantitas</th>
            <th scope="col">Subtotal</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <tr>
            <td scope="row">Tas Pinggang Adicolor Classic <br>Size: NSUK</td>
            <td>Rp. 344.500</td>
            <td class="text-center">1</td>
            <td>Rp. 344.500</td>
          </tr>
          <tr>
            <td scope="row">Tas Pinggang Adicolor Classic <br>Size: NSUK</td>
            <td>Rp. 344.500</td>
            <td class="text-center">1</td>
            <td>Rp. 344.500</td>
          </tr>
          <tr>
            <td scope="row">Tas Pinggang Adicolor Classic <br>Size: NSUK</td>
            <td>Rp. 344.500</td>
            <td class="text-center">1</td>
            <td>Rp. 344.500</td>
          </tr>
        </tbody>
        <tfoot class="table-group-divider bg-grey">
          <tr>
            <td colspan="4" class="text-end">Subtotal : Rp.344.500</td>
          </tr>
          <tr>
            <td colspan="4" class="text-end">Shipping & Handling: Rp. 0</td>
          </tr>
          <tr>
            <td colspan="4" class="text-end">Grand Total: Rp. 344.500</td>
          </tr>
        </tfoot>
      </table>
      <!-- link kembali -->
      <a href="RiwayatPesanan.html" class="text-black">
        < Kembali Ke Pesanan Saya</a>
          <!-- akhir link kembali -->
          <!-- akhir item yang dipesan -->
    </div>
    <!-- akhir bagian kiri -->
    <!-- bagian kanan -->
    <div class="w-25">
      <a href="AkunSaya.html" class="fw-bold nav-link d-block mb-3">Akun Saya</a>
      <a href="InformasiPribadi.html" class="text-black d-block mb-3 hover-black">Informasi Pribadi</a>
      <a href="DataAlamat.html" class="text-black d-block mb-3 hover-black">Data Alamat</a>
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