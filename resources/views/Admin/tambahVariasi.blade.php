@extends('Admin.layout.layoutAdmin')

@section('main')
<div class="container p-4">
  {{-- path --}}
  <p class="mb-0">
    /
    <a href="/admin" class="text-dark fw-bold fs-6">Admin</a>
    /
    <a href="/admin/produks" class="text-dark fw-bold fs-6">Daftar Produk</a>
    /
    <a class="text-dark fw-bold fs-6">Tambah Variasi Produk</a>
  </p>
  {{-- akhir path --}}
  <p class="fw-bold fs-2 text-center">Tambah Variasi Produk</p>
  <p class="fw-bold text-center">{{ $produkSerupa->nama }}</p>
  <form action="/admin/variasi" class="m-auto w-50" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- Nama Produk --}}
    <div class="mb-5">
      <label for="nam" class="form-label fw-bold fs-5">Nama Produk</label>
      <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama"
        placeholder="Adidas...." value="{{ old('nama') ? : $produkSerupa->nama }}">
      @error('nama')
      <div class=" invalid-feedback">{{ $message }}
      </div>
      @enderror
    </div>
    {{-- akhir nama produk --}}
    {{-- Deskripsi Produk --}}
    <div class="mb-5">
      <label for="deskripsi" class="form-label fw-bold fs-5">Deskripsi Produk</label>
      <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="A FRESH TAKE ON...."
        value="{{ $produkSerupa->detailproduk->deskripsi }}" readonly>
    </div>
    {{-- akhir deskripsi produk --}}
    {{-- Sub Deskripsi Produk --}}
    <div class="mb-5">
      <label for="subDeskripsi" class="form-label fw-bold fs-5">Sub Deskripsi Produk</label>
      <textarea class="form-control" name="subDeskripsi" id="subDeskripsi"
        readonly>{!! $produkSerupa->detailproduk->subDeskripsi !!}</textarea>
    </div>
    {{-- akhir sub deskripsi produk --}}
    {{-- Spesifikasi Produk --}}
    <div class="mb-5">
      <label for="spesifikasi" class="form-label fw-bold fs-5">Spesifikasi Produk</label>
      <textarea class="form-control" name="spesifikasi" id="spesifikasi" readonly>
        {!! $produkSerupa->detailproduk->spesifikasi !!}
      </textarea>
    </div>
    {{-- akhir spesifikasi produk --}}
    {{-- Pengguna Produk --}}
    <div class="mb-5">
      <label for="pengguna" class="form-label fw-bold fs-5">Pengguna Produk</label>
      <select class="form-select" name="pengguna" id="pengguna" aria-label="Default select example">
        <option value="{{ $produkSerupa->detailproduk->pengguna }}" selected>{{ $produkSerupa->detailproduk->pengguna
          }}</option>
      </select>
    </div>
    {{-- akhir pengguna produk --}}
    {{-- jenis Produk --}}
    <div class="mb-5">
      <label for="jenis" class="form-label fw-bold fs-5">Jenis Produk</label>
      <select class="form-select" name="jenis" id="jenis" aria-label="Default select example">
        <option value="{{ $produkSerupa->detailproduk->jenis }}" selected>{{ $produkSerupa->detailproduk->jenis }}
        </option>
      </select>
    </div>
    {{-- akhir jenis produk --}}
    {{-- kategori Produk --}}
    <div class="mb-5">
      <label for="kategori" class="form-label fw-bold fs-5">Kategori Produk</label>
      <select class="form-select" name="kategori" id="kategori" aria-label="Default select example">
        <option value="{{ $produkSerupa->detailproduk->kategori }}" selected>{{ $produkSerupa->detailproduk->kategori
          }}</option>
      </select>
      @error('kategori')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    {{-- akhir kategori produk --}}
    {{-- warna Produk --}}
    <div class="mb-5">
      <label for="warna" class="form-label fw-bold fs-5">Warna Produk</label>
      <select class="form-select @error('warna') is-invalid @enderror" name="warna" id="warna"
        aria-label="Default select example">
        <option @if(!old('warna')) selected @endif disabled>Warna...</option>
        @foreach ($warnas as $warna)
        <option value="{{ $warna->id }}" @if(old('warna')==$warna->id) selected @endif >{{ $warna->warna }}
        </option>
        @endforeach
      </select>
      @error('warna')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    {{-- akhir warna produk --}}
    {{-- Deskripsi Warna Produk --}}
    <div class="mb-5">
      <label for="deskripsiWarna" class="form-label fw-bold fs-5">Deskripsi Warna Produk</label>
      <input type="text" name="deskripsiWarna" class="form-control @error('deskripsiWarna') is-invalid @enderror"
        id="namaProduk" placeholder="merah/putih/multicolor...." value="{{ old('deskripsiWarna') }}">
      @error('deskripsiWarna')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    {{-- akhir deskripsi warna produk --}}
    {{-- ukuran Produk --}}
    <div class="mb-5 row">
      <label for="ukuran" class="form-label fw-bold fs-5">Ukuran Produk</label>
      @php
      $i = 0;
      @endphp
      @foreach ($jenisUkurans as $jenis)
      <p class="fw-bold text-uppercase">{{ $jenis->jenis }}</p>
      @foreach ($ukurans->where('jenis', $jenis->jenis) as $ukuran)
      <div class="form-check col-2">
        <input class="form-check-input" type="checkbox" value="{{ $ukuran->id }}" id="ukuran{{ $i }}"
          name="ukuran{{ $i }}" @if(old('ukuran'.$i)) checked @endif>
        <label class="form-check-label" for="ukuran{{ $i }}">
          {{ $ukuran->ukuran }}
        </label>
        <input type="text" name="stock{{ $i }}" id="stock{{ $i }}"
          class="form-control @error('stock'.$i) is-invalid @enderror " value="{{ old('stock'.$i) }}"
          placeholder="stock...">
        @if(old('ukuran'.$i))
        @error('stock'.$i)
        <div class=" invalid-feedback">{{ $message }}
        </div>
        @enderror
        @endif
        @php
        $i++;
        @endphp
      </div>
      @endforeach
      <br>
      <br>
      <hr>
      @endforeach
    </div>
    {{-- akhir ukuran produk --}}
    <div class="d-flex gap-4 w-100">
      {{-- stock Produk --}}
      {{-- <div class="mb-5 w-100">
        <label for="stock" class="form-label fw-bold fs-5">Stock Produk</label>
        <input type="text" name="stock" class="form-control @error('stock') is-invalid @enderror"
          value="{{ old('stock') }}" id="stock" placeholder="12....">
        @error('stock')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div> --}}
      {{-- akhir stock produk --}}
      {{-- harga Produk --}}
      <div class="mb-5 w-100">
        <label for="harga" class="form-label fw-bold fs-5">harga Produk</label>
        <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga"
          placeholder="12000000...." value="{{ old('harga') }}">
        @error('harga')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      {{-- akhir nama produk --}}
    </div>
    {{-- Gambar Produk --}}
    @for ($i = 0; $i < $produkSerupa->gambar->count(); $i++)
      <div class="mb-3">
        <label for="gambar{{ $i }}" class="form-label fw-bold fs-5">@if ($i == 0) Gambar Utama @else Gambar Lainnya
          @endif</label>
        <img class="img-preview{{ $i }} img-fluid w-25 m-3">
        <input class="form-control form-control-sm @error('gambar'.$i) is-invalid @enderror" name="gambar{{ $i }}"
          id="gambar{{ $i }}" type="file" onchange="previewImage()">
        @error('gambar'.$i)
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      @endfor
      {{-- akhir gambar produk --}}
      {{-- inputan jumlah gambar --}}
      <input type="hidden" name="jumlahGambar" id="jumlahGambar" value="{{ $produkSerupa->gambar->count() }}">
      {{-- akhir inputan jumlah gambar --}}
      {{-- inputan id detailproduk --}}
      <input type="hidden" name="detailproduk_id" id="detailproduk_id" value="{{ $produkSerupa->detailproduk_id }}">
      {{-- akhir id detailproduk --}}
      {{-- button kirim --}}
      <div class="d-flex justify-content-evenly">
        <a href="/admin/produks" class="btn btn-danger fw-bold fs-5 px-4 my-4">Batal</a>
        <button type="submit" class="btn btn-dark fw-bold fs-5 px-4 my-4">Tambah Variasi Produk</button>
      </div>
      {{-- akhir button kirim --}}
  </form>
</div>
@endsection

@section('script')
{{-- tinymce --}}
<script src="https://cdn.tiny.cloud/1/fkny8lakkibesvbv59ae3w2w8d3d9vn18j36acymyng6i795/tinymce/6/tinymce.min.js"
  referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#subDeskripsi, textarea#spesifikasi',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    readonly: true, 
  });
</script>

{{-- menampilkan preview gambar --}}
<script>
  function previewImage(){
  for (let index = 0; index < {{ $produkSerupa->gambar->count() }}; index++) {
    const image = document.querySelector(`#gambar${index}`)
    const imgPreview = document.querySelector(`.img-preview${index}`)

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(OFREvent) {
      imgPreview.src = OFREvent.target.result;
    }
  }
}
</script>
{{-- akhir menampilkan preview gambar --}}
@endsection