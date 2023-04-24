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
      <!-- Pesanan Baru Baru Ini -->
      <p class="fw-bold fs-3 mt-3">PESANAN SAYA</p>
      <table class="table table-striped">
        <thead>
          <tr class="table-dark">
            <th scope="col">Pesanan#</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Kirim Ke</th>
            <th scope="col">Total Pesanan</th>
            <th scope="col">Status Pesanan</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @php
          $i = 1
          @endphp
          @foreach ($pesanans as $pesanan)
          <tr>
            <th scope="row">{{ $i }}</th>
            <td>{{ $pesanan->created_at }}</td>
            <td>{{ $pesanan->namaDepan }} {{ $pesanan->namaBelakang }}</td>
            <td>Rp. {{ number_format($pesanan->totalHarga , 0, ',', '.') }}</td>
            <td class="fst-italic">{{ $pesanan->status }}</td>
            <td><a href="/detailpesanan/{{ $pesanan->id }}" class="text-black">Lihat Pesanan</a></td>
          </tr>
          @php
          $i++
          @endphp
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- akhir pesanan baru baru ini -->
    <!-- akhir bagian kiri -->
    <!-- bagian kanan -->
    <div class="w-25">
      <a href="/akunsaya" class="text-black d-block mb-3 hover-black">Akun Saya</a>
      <a href="/informasipribadi" class="text-black d-block mb-3 hover-black">Informasi Pribadi</a>
      <a href="/daftaralamat" class="text-black d-block mb-3 hover-black">Daftar Alamat</a>
      <a href="/riwayatpesanan" class="fw-bold nav-link d-block mb-3">Riwayat Pesanan</a>
      <a href="/wishlist" class="text-black d-block mb-3 hover-black">Wish List</a>
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