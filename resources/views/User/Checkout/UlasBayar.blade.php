@extends('layouts.layoutCheckout')

@section('navbar')
<div class="d-flex pb-3">
  <p class="mb-0 fw-bold fs-vs me-2 bg-black rounded-circle text-white text-center" style="width: 20px">
    1
  </p>
  <a href="/checkout" class="fw-bold mb-0 fs-vs text-black nav-link" style="letter-spacing: 3px">
    DETAIL PESANAN
  </a>
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
      <button onclick="setValue('credit card / debit card online')"
        class="border-0 bg-white border-top border-bottom px-4 py-2 w-100 alamat text-black nav-link">
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
      <button onclick="setValue('online payment')"
        class="border-0 bg-white border-top border-bottom px-4 py-2 w-100 alamat text-black nav-link">
        <p class="fw-bold fs-5">ONLINE PAYMENT</p>
        <img src="img/pembayaran1.jpeg" width="500px" class="d-block" alt="" />
        <p class="fs-vs">
          *Maksimal transaksi untuk QRIS adalah IDR 2.000.000,-
        </p>
      </button>
      @error('pembayaran')
      <div class="alert alert-danger fade show" role="alert">
        <strong>Pilih Pembayaran Terlebih Dahulu!!</strong>
      </div>
      @enderror
      <!-- akhir gambar payment -->
      <form action="/pembayaran" method="POST">
        @csrf
        <input type="hidden" name="pembayaran" id="selectedValue">
        <input type="hidden" name="alamat_id" id="alamat_id" value="{{ $alamat_id }}">
        <button type="submit" class="bg-black fw-bold py-2 px-4 mt-3 rounded-0 text-white d-block w-50 text-center">
          PESAN SEKARANG ---->
        </button>
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
        <li class="list-group-item fs-vs p-2">{{ $keranjangs->count() }} Produk</li>
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
      <input type="hidden" name="totalHarga" id="totalHarga" value="{{ $jumlahHarga }}">
      </form>
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
<script>
  function setValue(value) {
  document.getElementById("selectedValue").value = value;
}
</script>
@endsection