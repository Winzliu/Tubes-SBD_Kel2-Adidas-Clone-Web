{{-- baru menyelesaikan form , belum memulai untuk mengirimkan sama sekali, controller blm di atur dan validation juga
blm --}}

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Produk Adidas</title>
  <link rel="stylesheet" href={{ asset("css/bootstrap.css") }}>
</head>

<body>
  <div class="container p-4">
    <p class="fw-bold fs-2 text-center">Tambah Produk</p>
    <form action="/admin/produks" class="m-auto w-50" method="POST" enctype="multipart/form-data">
      @csrf
      {{-- Nama Produk --}}
      <div class="mb-5">
        <label for="nam" class="form-label fw-bold fs-5">Nama Produk</label>
        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama"
          placeholder="Adidas...." value="{{ old('nama') }}">
        @error('nama')
        <div class=" invalid-feedback">{{ $message }}
        </div>
        @enderror
      </div>
      {{-- akhir nama produk --}}
      {{-- Deskripsi Produk --}}
      <div class="mb-5">
        <label for="deskripsi" class="form-label fw-bold fs-5">Deskripsi Produk</label>
        <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi"
          placeholder="A FRESH TAKE ON...." value="{{ old('deskripsi') }}">
        @error('deskripsi')
        <div class=" invalid-feedback">{{ $message }}
        </div>
        @enderror
      </div>
      {{-- akhir deskripsi produk --}}
      {{-- Sub Deskripsi Produk --}}
      <div class="mb-5">
        <label for="subDeskripsi" class="form-label fw-bold fs-5">Sub Deskripsi Produk</label>
        <textarea class="form-control @error('subDeskripsi') is-invalid @enderror" name="subDeskripsi" id="subDeskripsi"
          value="{{ old('subDeskripsi') }}">You can't go wrong with a classic. These adidas....</textarea>
        @error('subDeskripsi')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      {{-- akhir sub deskripsi produk --}}
      {{-- Spesifikasi Produk --}}
      <div class="mb-5">
        <label for="spesifikasi" class="form-label fw-bold fs-5">Spesifikasi Produk</label>
        <textarea class="form-control @error('spesifikasi') is-invalid @enderror" name="spesifikasi" id="spesifikasi"
          value="{{ old('spesifikasi') }}">
          <ul>
            <li>Regular fit</li>
            <li>Reinforced leather upper with rubber shell toe</li>
            <li>....</li>
          </ul>
        </textarea>
        @error('spesifikasi')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      {{-- akhir spesifikasi produk --}}
      {{-- Pengguna Produk --}}
      <div class="mb-5">
        <label for="pengguna" class="form-label fw-bold fs-5">Pengguna Produk</label>
        <select class="form-select @error('pengguna') is-invalid @enderror" name="pengguna" id="pengguna"
          aria-label="Default select example">
          <option disabled selected>Pengguna...</option>
          <option value="pria">Pria</option>
          <option value="wanita">Wanita</option>
          <option value="anak">Anak</option>
        </select>
        @error('pengguna')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      {{-- akhir pengguna produk --}}
      {{-- jenis Produk --}}
      <div class="mb-5">
        <label for="jenis" class="form-label fw-bold fs-5">Jenis Produk</label>
        <select class="form-select @error('jenis') is-invalid @enderror" name="jenis" id="jenis"
          aria-label="Default select example">
          <option disabled selected>Jenis...</option>
        </select>
        @error('jenis')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      {{-- akhir jenis produk --}}
      {{-- kategori Produk --}}
      <div class="mb-5">
        <label for="kategori" class="form-label fw-bold fs-5">Kategori Produk</label>
        <select class="form-select @error('kategori') is-invalid @enderror" name="kategori" id="kategori"
          aria-label="Default select example">
          <option disabled selected>Kategori...</option>
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
          <option disabled @if(!old('warna')) selected @endif>Warna...</option>
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
        @foreach ($ukurans->where('jenis', $jenis->jenis) as $ukuran)
        <div class="form-check col-2">
          <input class="form-check-input @error('ukuran'.$i) is-invalid @enderror" type="checkbox"
            value="{{ $ukuran->id }}" id="ukuran{{ $i }}" name="ukuran{{ $i }}" @if(old('ukuran'.$i)==$ukuran->id)
          checked @endif>
          <label class="form-check-label" for="ukuran{{ $i }}">
            {{ $ukuran->ukuran }}
          </label>
          @php
          $i++;
          @endphp
        </div>
        @endforeach
        <br>
        <br>
        <hr>
        @endforeach
        @error('ukuran')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      {{-- akhir ukuran produk --}}
      <div class="d-flex gap-4 w-100">
        {{-- stock Produk --}}
        <div class="mb-5 w-100">
          <label for="stock" class="form-label fw-bold fs-5">Stock Produk</label>
          <input type="text" name="stock" class="form-control @error('stock') is-invalid @enderror"
            value="{{ old('stock') }}" id="stock" placeholder="12....">
          @error('stock')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
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
      @for ($i = 0; $i < request()->gambar; $i++)
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
        <input type="hidden" name="jumlahGambar" id="jumlahGambar" value="{{ request()->gambar }}">
        {{-- akhir inputan jumlah gambar --}}
        {{-- button kirim --}}
        <div class="d-flex justify-content-evenly">
          <a href="/admin/produks" class="btn btn-danger fw-bold fs-5 px-4 my-4">Batal</a>
          <button type="submit" class="btn btn-dark fw-bold fs-5 px-4 my-4">Tambah Produk</button>
        </div>
        {{-- akhir button kirim --}}
    </form>
  </div>


  <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.js.map') }}"></script>
  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  <!-- ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  {{-- tinymce --}}
  <script src="https://cdn.tiny.cloud/1/fkny8lakkibesvbv59ae3w2w8d3d9vn18j36acymyng6i795/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>
  <script>
    tinymce.init({
        selector: 'textarea#subDeskripsi, textarea#spesifikasi',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
      });
  </script>

  <!-- memiih jenis melalui pengguna yang dipilih -->
  <script>
    const selectedPengguna = document.getElementById("pengguna");

    selectedPengguna.addEventListener("change", (e) => {
      let pengguna = e.target.options[e.target.selectedIndex].value;
          let tampung = "<option selected disabled>Jenis</option>";
          document.getElementById("jenis").innerHTML =
            "<option selected disabled>Jenis</option>";
          if(pengguna == 'pria' || pengguna == 'wanita'){
            tampung += "<option value='sepatu'>Sepatu</option>"
            tampung += "<option value='pakaian'>Pakaian</option>"
            tampung += "<option value='aksesoris'>Aksesoris</option>"
            tampung += "<option value='sports'>Sports</option>"
          } else if(pengguna == 'anak'){
            tampung += "<option value='anak-8-16'>Anak (8-16)</option>"
            tampung += "<option value='anak-4-8'>Anak (4-8)</option>"
            tampung += "<option value='balita-1-4'>Balita (1-4)</option>"
            tampung += "<option value='sports'>Sports</option>"
          }
          document.getElementById("jenis").innerHTML = tampung;
    });
  </script>
  <!-- akhir memiih jenis melalui pengguna yang dipilih -->

  <!-- memiih kategori melalui jenis yang dipilih -->
  <script>
    const selectedJenis = document.getElementById("jenis");

    selectedJenis.addEventListener("change", (e) => {
      const selectedPengguna = document.getElementById("pengguna");
      let jenis = e.target.options[e.target.selectedIndex].value;
      let pengguna = selectedPengguna.value;
          let tampung = "<option selected disabled>Kategori</option>";
          document.getElementById("kategori").innerHTML =
            "<option selected disabled>Kategori</option>";
          if(pengguna == 'pria' && jenis == 'sepatu'){
            tampung += "<option value='originals'>Originals</option>"
            tampung += "<option value='training'>Training</option>"
            tampung += "<option value='running'>Running</option>"
            tampung += "<option value='sepak-bola'>Sepak Bola</option>"
            tampung += "<option value='basket'>Basket</option>"
            tampung += "<option value='tenis'>Tenis</option>"
            tampung += "<option value='essentials'>Essentials</option>"
            tampung += "<option value='slides'>Slides</option>"
            tampung += "<option value='outdoor'>Outdoor</option>"
          } else if(pengguna == 'pria' && jenis == 'pakaian'){
            tampung += "<option value='atasan'>Atasan</option>"
            tampung += "<option value='jerseys'>Jerseys</option>"
            tampung += "<option value='bawahan'>Bawahan</option>"
            tampung += "<option value='celana-panjang'>Celana Panjang & Celana Ketat</option>"
            tampung += "<option value='jaket'>Jaket & Track Top</option>"
            tampung += "<option value='hoodies'>Hoodies/Sweatshirts</option>"
          } else if(pengguna == 'pria' && jenis == 'aksesoris'){
            tampung += "<option value='tas'>Tas</option>"
            tampung += "<option value='topi'>Topi & Headband</option>"
            tampung += "<option value='kaos-kaki'>Kaos Kaki</option>"
            tampung += "<option value='bola'>Bola</option>"
            tampung += "<option value='sarung-tangan'>Sarung Tangan & Deker</option>"
            tampung += "<option value='aksesoris-lainnya'>Aksesoris Lainnya</option>"
          } else if(pengguna == 'pria' && jenis == 'sports'){
            tampung += "<option value='sepak-bola'>Sepak Bola</option>"
            tampung += "<option value='training'>Training</option>"
            tampung += "<option value='running'>Running</option>"
            tampung += "<option value='basket'>Basket</option>"
            tampung += "<option value='tenis'>Tenis</option>"
            tampung += "<option value='golf'>Golf</option>"
            tampung += "<option value='outdoor'>Outdoor</option>"
            tampung += "<option value='sepeda'>Sepeda</option>"
          } else if(pengguna == 'wanita' && jenis == 'sepatu'){
            tampung += "<option value='originals'>Originals</option>"
            tampung += "<option value='training'>Training</option>"
            tampung += "<option value='running'>Running</option>"
            tampung += "<option value='tenis'>Tenis</option>"
            tampung += "<option value='slides'>Slides</option>"
            tampung += "<option value='essentials'>Essentials</option>"
            tampung += "<option value='outdoor'>Outdoor</option>"
          } else if(pengguna == 'wanita' && jenis == 'pakaian'){
            tampung += "<option value='dress'>Dress & Rok</option>"
            tampung += "<option value='celana-panjang'>Celana Panjang & Celana Ketat</option>"
            tampung += "<option value='sport-bra'>Sport Bra</option>"
            tampung += "<option value='celana-pendek'>Celana Pendek</option>"
            tampung += "<option value='atasan'>Atasan</option>"
            tampung += "<option value='jaket'>Jaket & Track Top</option>"
            tampung += "<option value='hoodie'>Hoodie/Sweatshirts</option>"
          } else if(pengguna == 'wanita' && jenis == 'aksesoris'){
            tampung += "<option value='tas'>Tas</option>"
            tampung += "<option value='topi'>Topi & Headband</option>"
            tampung += "<option value='sarung-tangan'>Sarung Tangan & Deker</option>"
            tampung += "<option value='kaos-kaki'>Kaos Kaki</option>"
            tampung += "<option value='aksesoris-lainnya'>Aksesoris Lainnya</option>"
          } else if(pengguna == 'wanita' && jenis == 'sports'){
            tampung += "<option value='training'>Training</option>"
            tampung += "<option value='running'>Running</option>"
            tampung += "<option value='golf'>Golf</option>"
            tampung += "<option value='tenis'>Tenis</option>"
            tampung += "<option value='sepak-bola'>Sepak Bola</option>"
            tampung += "<option value='basket'>Basket</option>"
            tampung += "<option value='outdoor'>Outdoor</option>"
            tampung += "<option value='renang'>Renang</option>"
            tampung += "<option value='sepeda'>Sepeda</option>"
          } else if(pengguna == 'anak' && jenis == 'anak-8-16' || pengguna == 'anak' && jenis == 'anak-4-8'){
            tampung += "<option value='new-arrivals'>New Arrivals</option>"
            tampung += "<option value='pakaian-laki-laki'>Pakaian Laki Laki</option>"
            tampung += "<option value='pakaian-perempuan'>Pakaian Perempuan</option>"
            tampung += "<option value='sepatu-laki-laki'>Sepatu Laki Laki</option>"
            tampung += "<option value='sepatu-perempuan'>Sepatu Perempuan</option>"
          } else if(pengguna == 'anak' && jenis == 'balita-1-4'){
            tampung += "<option value='new-arrivals'>New Arrivals</option>"
            tampung += "<option value='pakaian-laki-laki'>Pakaian</option>"
            tampung += "<option value='sepatu-laki-laki'>Sepatu</option>"
          } else if(pengguna == 'anak' && jenis == 'sports'){
            tampung += "<option value='training'>Training</option>"
            tampung += "<option value='sepak-bola'>Sepak Bola</option>"
            tampung += "<option value='golf'>Golf</option>"
            tampung += "<option value='running'>Running</option>"
          }
          document.getElementById("kategori").innerHTML = tampung;
    });
  </script>
  <!-- akhir memiih kategori melalui pengguna yang dipilih -->

  {{-- menampilkan preview gambar --}}
  <script>
    function previewImage(){
      for (let index = 0; index < {{ request()->gambar }}; index++) {
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

</body>

</html>