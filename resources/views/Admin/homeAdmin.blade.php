@extends('Admin.layout.layoutAdmin')

@section('main')
<div class="w-100 p-5">
  {{-- path --}}
  <p>
    /
    <a href="/admin" class="text-dark fw-bold fs-6">Admin</a>
  </p>
  {{-- akhir path --}}
  <h1 class="text-center fs-2 fw-bold mb-5">WELCOME ADMIN</h1>
  <p class="text-center fs-4 fw-bold ">REKAPAN PENJUALAN</p>
  <table class="table table-striped">
    <thead class="table-dark">
      <tr class="col">
        <th scope="col">No.</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Penerima</th>
        <th scope="col">Total Pesanan</th>
        <th scope="col">Status Pesanan</th>
        <th scope="col">Lihat Pesanan</th>
      </tr>
    </thead>
    <tbody>
      @php
      $i = 1
      @endphp
      @foreach ($pesanans as $pesanan)
      <tr>
        <th scope="row">{{ $i + (($pesanans->currentPage()-1) * 5) }}</th>
        <td>{{ date('d-M-Y,',strtotime($pesanan->created_at)) }}</td>
        <td>{{ $pesanan->namaDepan }} {{ $pesanan->namaBelakang }}</td>
        <td>{{ number_format($pesanan->totalHarga, 0, ',', '.') }}</td>
        <td class="fst-italic">{{ $pesanan->status }}</td>
        <td><a href="/admin/pesanan/{{ $pesanan->id }}">Lihat pesanan</a></td>
      </tr>
      @php
      $i++
      @endphp
      @endforeach
      <div class="d-flex justify-content-center ">
        {{ $pesanans->links() }}
      </div>

    </tbody>
  </table>
</div>
@endsection