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
        <p class="fs-3 fw-bold">HALO {{ Auth::user()->namaDepan }}</p>
        <form action="/logout" method="POST">
          @csrf
          <p class="align-self-center">Bukan {{ Auth::user()->namaDepan }}? <button type="submit"
              class="border-0 bg-transparent fw-bold text-black ps-1 hover-black"
              style="letter-spacing: 2px;">Keluar</button></p>
        </form>
      </div>
      <!-- Pesanan Baru Baru Ini -->
      <p class="fw-bold fs-3 mb-1">ORDER #{{ $pesanan->id }} - <span class="text-uppercase">{{
          $pesanan->status
          }}</span></p>
      <p class="mb-1">Tentang Pesanan Ini:</p>
      <p class="fw-bold mb-1">Informasi Pesanan</p>
      <hr>
      <p>Tanggal Pesanan: {{ $pesanan->created_at }}</p>
      <!-- alamat -->
      <div class="d-flex">
        <div class="bg-grey p-4">
          <p class="fw-bold">ALAMAT PENGIRIMAN</p>
          <p class="mb-0">{{ $pesanan->namaDepan }} {{ $pesanan->namaBelakang }}</p>
          <p class="mb-0">{{ $pesanan->namaJalan }}</p>
          <p class="mb-0">{{ $pesanan->provinsi }},{{ $pesanan->kota }},{{ $pesanan->kecamatan
            }},{{ $pesanan->keluarahan }},{{ $pesanan->kodePos }}</p>
          <p class="mb-0">Indonesia</p>
          <p class="mb-2"><span class="fw-bold">Telepon: </span>{{ $pesanan->nomorTelepon }}</p>
        </div>
        <div class="bg-grey p-4">
          <p class="fw-bold">METODE PENGIRIMAN</p>
          <p class="mb-0">GRATIS</p>
        </div>
        <div class="bg-grey p-4">
          <p class="fw-bold">METODE PEMBAYARAN</p>
          <p class="mb-0 text-uppercase">{{ $pesanan->pembayaran }}</p>
        </div>
      </div>
      <!-- akhir alamat -->
      <!-- item yang dipesan -->
      <p class="fw-bold fs-3">ITEM DIPESAN</p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nama Produk</th>
            <th scope="col">Warna</th>
            <th scope="col">Harga</th>
            <th scope="col">Kuantitas</th>
            <th scope="col">Subtotal</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          @foreach ($produkPesanans as $produkPesanan)
          <tr>
            <td scope="row">{{ $produkPesanan->nama }} <br>Size: {{ $produkPesanan->ukuran }}
            </td>
            <td scope="row" class="text-uppercase">{{ $produkPesanan->warna }}</td>
            <td>Rp. {{ number_format($produkPesanan->harga , 0, ',', '.') }}</td>
            <td class="text-center">{{ $produkPesanan->jumlahItem }}</td>
            <td>Rp. {{ number_format($produkPesanan->harga * $produkPesanan->jumlahItem, 0, ',', '.') }}</td>
          </tr>
          @endforeach
        </tbody>
        <tfoot class="table-group-divider bg-grey">
          <tr>
            <td colspan="5" class="text-end">Subtotal : {{ number_format($pesanan->totalHarga , 0, ',', '.') }}</td>
          </tr>
          <tr>
            <td colspan="5" class="text-end">Shipping & Handling: Rp. 0</td>
          </tr>
          <tr>
            <td colspan="5" class="text-end">Grand Total: Rp. {{ number_format($pesanan->totalHarga , 0, ',', '.') }}
            </td>
          </tr>
        </tfoot>
      </table>
      <!-- link kembali -->
      <a href="/riwayatpesanan" class="text-black">
        < Kembali Ke Pesanan Saya</a>
          <!-- akhir link kembali -->
          <!-- akhir item yang dipesan -->
    </div>
    <!-- akhir bagian kiri -->
    <!-- bagian kanan -->
    <div class="w-25">
      <a href="/akunsaya" class="fw-bold nav-link d-block mb-3">Akun Saya</a>
      <a href="/informasipribadi" class="text-black d-block mb-3 hover-black">Informasi Pribadi</a>
      <a href="/daftaralamat" class="text-black d-block mb-3 hover-black">Daftar Alamat</a>
      <a href="/riwayatpesanan" class="text-black d-block mb-3 hover-black">Riwayat Pesanan</a>
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