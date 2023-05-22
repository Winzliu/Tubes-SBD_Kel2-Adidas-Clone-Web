@extends('Admin.layout.layoutAdmin')

@section('main')
<div class="w-100 p-5">
  {{-- path --}}
  <p>
    /
    <a href="/admin" class="text-dark fw-bold fs-6">Admin</a>
    /
    <a class="text-dark fw-bold fs-6">Verifikasi Ulasan</a>
  </p>
  {{-- akhir path --}}
  <p class="text-center fs-2 fw-bold mb-3">VERIFIKASI ULASAN</p>
  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show w-50 mb-3 m-auto text-center" role="alert">
    <strong>{{ session('success') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  @if (session()->has('error'))
  <div class="alert alert-danger alert-dismissible fade show w-50 mb-3 m-auto text-center" role="alert">
    <strong>{{ session('error') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  <table class="table table-striped">
    <thead class="table-dark text-center">
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Nama User /</br> Nama Produk</th>
        <th scope="col">Rating Quality</th>
        <th scope="col">Ulasan</th>
        <th scope="col">Verifikasi/Hapus</th>
      </tr>
    </thead>

    <tbody class="text-center">
      @php
      $z = 1
      @endphp
      @foreach ($ulasans as $ulasan)
      <tr>
        <th scope="row">{{ $z + (($ulasans->currentPage()-1) * 5) }}</th>
        <td>{{ date('d-M-Y',strtotime($ulasan->created_at)) }}</td>
        <td>{{ $ulasan->namaDepan }} / </br>{{ $ulasan->produk->nama }}</td>
        <td>
          @for ($i = 0; $i < $ulasan->quality; $i++)
            <ion-icon name="star"></ion-icon>
            @endfor
        </td>
        <td class="w-25">{{ $ulasan->ulasan }}</td>
        <td>
          <form action="/admin/verifikasi/{{ $ulasan->id }}" method="POST" class="d-inline">
            @csrf
            @method('put')
            <button type="submit" class="border-0 bg-transparent">
              @if ($ulasan->is_verif == 1)
              <ion-icon class="btn btn-success me-3 fs-4" style="height: 25px" name="checkmark-circle-outline">
              </ion-icon>
              @else
              <ion-icon class="btn btn-danger me-3 fs-4" style="height: 25px" name="close-circle-outline">
              </ion-icon>
              @endif
            </button>
          </form>
          <button type="button" class="border-0 bg-transparent" data-bs-toggle="modal"
            data-bs-target="#exampleModal{{ $ulasan->id }}">
            <ion-icon class="btn btn-danger me-3 fs-4" style="height: 25px" name="trash-outline">
            </ion-icon>
          </button>
        </td>
      </tr>
      @php
      $z++
      @endphp
      @endforeach
    </tbody>
  </table>
  <div class="d-flex justify-content-center ">
    {{ $ulasans->links() }}
  </div>
</div>

@foreach ($ulasans as $ulasan)
<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $ulasan->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Produk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fw-bold">
        <span class="fw-normal">Yakin Ingin Menghapus</span> "{{ $ulasan->ulasan }} ({{ $ulasan->namaDepan }})""
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="/admin/verifikasi/{{ $ulasan->id }}" method="POST" class="d-inline-block">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">
            Hapus
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection