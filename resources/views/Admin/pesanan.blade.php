@extends('admin.layout.layoutAdmin')

@section('main')
<div class="mt-4">
  <div class="container px-5 d-flex gap-2">
    <!-- bagian kiri -->
    <div class="w-100 me-3">
      {{-- path --}}
      <p>
        /
        <a href="/admin" class="text-dark fw-bold fs-6">Admin</a>
        /
        <a class="text-dark fw-bold fs-6">Pesanan</a>
      </p>
      {{-- akhir path --}}
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
      <!-- akhir item yang dipesan -->
    </div>
    <!-- akhir bagian kiri -->
  </div>
</div>
@endsection

@section('script')
<script src="js/AkunSaya.js"></script>
@endsection