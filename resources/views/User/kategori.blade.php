@extends('layouts.layoutIndex')

@section('main')
<div class="position-relative mt-7">
  <!-- 3 navbar -->
  <div class="d-flex justify-content-center border-bottom gap-5">
    <a class="nav-link hover-line fs-s py-2">GRATIS ONGKIR UNTUK PESANAN MIN. 900RB</a>
    <a class="nav-link hover-line fs-s py-2">CHAT DENGAN KAMI</a>
    <a class="nav-link hover-line fs-s py-2">CICILAN AKULAKU TERSEDIA SEKARANG!</a>
  </div>
  <!-- akhir 3 navbar -->
  <!-- Produk -->
  <div class="px-5 mx-4">
    <!-- head -->
    <div class="d-flex py-2">
      <a href="#" class="nav-link hover-black text-decoration-underline fs-vs fw-bold"
        style="letter-spacing: 2px;">KEMBALI</a>
      <p class="fs-s ms-3 text-uppercase">{{ $title }}</p>
    </div>
    <!-- akhir head -->
    <!-- kategori/Filter -->
    <div class="position-relative">
      <p class="text-muted fs-vs mb-4"><span class="fs-2 text-black fw-bold fst-italic me-2 text-uppercase">{{ $judul
          }}</span>
      </p>

      <form action="{{ request()->url() }}" method="GET">
        <div class="d-flex border border-1 border-dark justify-content-between" id="navbar-1" style="z-index: 999;">
          <div class="p-1 d-flex gap-2 w-100 justify-content-between">
            <div class="d-flex gap-2">
              {{-- rentang harga --}}
              <div class="dropdown">
                <button class="h-100 border border-dark rounded-0 bg-transparent dropdown-toggle " type="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Harga
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <div class="form-floating mb-3">
                      <input type="text" value="{{ request()->query('minimum') ?: 0 }}" name="minimum"
                        class="form-control rounded-0 border-dark" style="height: 40px" id="floatingInput"
                        placeholder="name@example.com">
                      <label class="p-2" for="floatingInput">Minimum</label>
                    </div>
                  </li>
                  <li>
                    <div class="form-floating mb-3">
                      <input type="text" value="{{ request()->query('maksimum') ?: 8499000 }}" name="maksimum"
                        class="form-control rounded-0 border-dark" style="height: 40px" id="floatingInput"
                        placeholder="name@example.com">
                      <label class="p-2" for="floatingInput">Maksimum</label>
                    </div>
                  </li>
                </ul>
              </div>
              {{-- akhir rentang harga --}}
              {{-- ukuran --}}
              <select name="ukuran" class="form-select border-dark rounded-0 h-100 w-auto"
                aria-label="Default select example">
                <option disabled {{ request()->query('ukuran') ?: 'selected' }}>Ukuran</option>
                @foreach ($ukurans as $ukuran)
                <option value="{{ $ukuran->id }}" {{ request()->query('ukuran') == $ukuran->id ? 'selected' : '' }}>{{
                  $ukuran->ukuran }}</option>
                @endforeach
              </select>
              {{-- akhir ukuran --}}
              {{-- warna --}}
              <select name="warna" class="form-select border-dark rounded-0 h-100 w-auto"
                aria-label="Default select example">
                <option disabled {{ request()->query('warna') ?: 'selected' }}>Warna</option>
                @foreach ($warnas as $warna)
                <option value="{{ $warna->id }}" {{ request()->query('warna') == $warna->id ? 'selected' : '' }}>{{
                  $warna->warna }}</option>
                @endforeach
              </select>
              {{-- akhir warna --}}
              {{-- filter --}}
              <select name="filter" class="form-select border-dark rounded-0 h-100 w-auto"
                aria-label="Default select example">
                <option disabled {{ request()->query('filter') ?: 'selected' }}>Filter</option>
                <option value="namaUp" {{ request()->query('filter') == 'namaUp' ? 'selected' : '' }}>Nama : A hingga Z
                </option>
                <option value="namaDown" {{ request()->query('filter') == 'namaDown' ? 'selected' : '' }}>Nama : Z
                  hingga A</option>
                <option value="hargaUp" {{ request()->query('filter') == 'hargaUp' ? 'selected' : '' }}>Harga : Rendah
                  ke Tinggi</option>
                <option value="hargaDown" {{ request()->query('filter') == 'hargaDown' ? 'selected' : '' }}>Harga :
                  Tinggi ke Rendah</option>
              </select>
              {{-- akhir filter --}}
            </div>
            {{-- button --}}
            <div class="p-1">
              <button role="button" class="btn rounded-0 bg-black px-5 me-5 h-100 fs-vs fw-bold py-1 text-white"
                type="submit">Cari</button>
            </div>
            {{-- akhir button --}}
          </div>
        </div>
      </form>
    </div>
    <!-- akhir kategori/Filter -->
    <!-- produk -->
    <div class="row row-cols-4 mt-4 ms-1">
      @foreach ($produks as $produk)
      <!-- produk 1.1 -->
      <div class="col">
        <a href="/produk/{{ Str::slug($produk->nama) }}/{{ $produk->warna->warna }}"
          class="text-black nav-link mb-3 hover-produk" style="height: 450px;" id="produk">
          <div class="card border-0">
            <div class="">
              @auth
              @if($produk->wishlist != NULL)
              @foreach ($produk_wishlist as $wishlist)
              @if(auth()->user()->id == $wishlist->user_id && $produk->id == $wishlist->produk_id)
              @php
              $hasil = 'delete';
              $id = $wishlist->id
              @endphp
              @break;
              @else
              @php
              $hasil = 'input'
              @endphp
              @endif
              @endforeach
              @if($hasil == 'delete')
              <form action="/wishlist/{{ $id }}" method="POST">
                @method('delete')
                @csrf
                @else
                <form action="/wishlist" method="POST">
                  @csrf
                  <input type="hidden" name="produk_id" id="produk_id" value="{{ $produk->id }}">
                  @endif
                  @else
                  <form action="/wishlist" method="POST">
                    @csrf
                    <input type="hidden" name="produk_id" id="produk_id" value="{{ $produk->id }}">
                    @endif
                    @endauth
                    <img src="{{ asset('img/'. $produk->gambar->first()->gambar) }}" class="card-img-top rounded-0"
                      alt="...">
                    <button type="submit" class="border-0 position-absolute start-100"
                      style="margin-left: -45px; margin-top: 17px;">
                      @auth
                      @if ($produk->wishlist != NULL)
                      @foreach ($produk_wishlist as $wishlist)
                      @if(auth()->user()->id == $wishlist->user_id && $produk->id == $wishlist->produk_id)
                      @php
                      $hasil = 'heart';
                      @endphp
                      @break
                      @else
                      @php
                      $hasil = 'heart-outline';
                      @endphp
                      @endif
                      @endforeach
                      <ion-icon style="font-size: 1.2rem;" name="{{ $hasil }}"></ion-icon>
                      @else
                      <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      @endif
                      @endauth
                    </button>
                  </form>
                  <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                    style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">BARU
                  </p>
            </div>
            @if($produk->where('detailproduk_id',$produk->detailproduk_id)->count() > 1)
            <div class="mt-1 bg-grey d-flex d-none px-2" id="image-produk">
              <button onclick="return false;" class="border-0"><img src={{ asset("img/".
                  $produk->gambar->first()->gambar)}}
                class="border-bottom border-dark border-2 hover-border-bottom" width="50px" alt=""></button>
              @foreach ($produks->where('detailproduk_id',$produk->detailproduk_id)->whereNotIn('id',$produk->id) as $p)
              <button onclick="return false;" class="border-0"><img src={{ asset("img/". $p->gambar->first()->gambar)}}
                class="hover-border-bottom" width="50px" alt=""></button>
              @endforeach
            </div>
            @endif
            <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
              <p class="card-text mt-1 fs-vs text-muted">{{ $produk->detailproduk->pengguna }} {{
                $produk->detailproduk->kategori }}</p>
              <p class="card-text fs-vs" style="margin-top: -7px;">{{ $produk->nama }}</p>
              <p class="card-text fs-vs mb-3" style="margin-top: -10px;">Rp. {{
                number_format($produk->harga
                , 0, ',', '.')}}</p>
              @if($produk->where('detailproduk_id',$produk->detailproduk_id)->count() > 1)
              <p class="card-text fs-vs text-muted mb-2">{{ $produks->where('detailproduk_id',
                $produk->detailproduk_id)->count() }} warna</p>
              @endif
            </div>
          </div>
        </a>
      </div>
      <!-- akhir produk 1.1 -->
      @endforeach
      {{--
      <!-- produk 2.1 -->
      <div class="col">
        <a href="#" class="text-black nav-link hover-produk" style="height: 450px;" id="produk">
          <div class="card border-0">
            <div class="">
              <img src="img/Terbaik12.jpeg" class="card-img-top rounded-0" alt="...">
              <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                style="margin-left: -45px; margin-top: 17px;">
                <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
              </button>
              <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">BARU</p>
            </div>
            <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
              <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
              <p class="card-text fs-vs" style="margin-top: -7px;">SANDAL ASTIR ADIDAS</p>
              <p class="card-text fs-vs mb-3" style="margin-top: -10px;">Rp. 1.300.000</p>
              <p class="card-text fs-vs text-muted"></p>
            </div>
          </div>
        </a>
      </div>
      <!-- akhir produk 2.1 -->
      <!-- produk 2.1 -->
      <div class="col">
        <a href="#" class="text-black nav-link hover-border" style="height: 450px;">
          <div class="card border-0">
            <div class="">
              <img src="img/Terbaik12.jpeg" class="card-img-top rounded-0" alt="...">
              <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                style="margin-left: -45px; margin-top: 17px;">
                <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
              </button>
              <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">BARU</p>
            </div>
            <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
              <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
              <p class="card-text fs-vs" style="margin-top: -7px;">SANDAL ASTIR ADIDAS</p>
              <p class="card-text fs-vs mb-3" style="margin-top: -10px;">Rp. 1.300.000</p>
              <p class="card-text fs-vs text-muted"></p>
            </div>
          </div>
        </a>
      </div>
      <!-- akhir produk 2.1 -->
      <!-- produk 2.1 -->
      <div class="col">
        <a href="#" class="text-black nav-link hover-border" style="height: 450px;">
          <div class="card border-0">
            <div class="">
              <img src="img/Terbaik12.jpeg" class="card-img-top rounded-0" alt="...">
              <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                style="margin-left: -45px; margin-top: 17px;">
                <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
              </button>
              <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">BARU</p>
            </div>
            <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
              <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
              <p class="card-text fs-vs" style="margin-top: -7px;">SANDAL ASTIR ADIDAS</p>
              <p class="card-text fs-vs mb-3" style="margin-top: -10px;">Rp. 1.300.000</p>
              <p class="card-text fs-vs text-muted"></p>
            </div>
          </div>
        </a>
      </div>
      <!-- akhir produk 2.1 -->
      <!-- produk 2.1 -->
      <div class="col">
        <a href="#" class="text-black nav-link hover-border" style="height: 450px;">
          <div class="card border-0">
            <div class="">
              <img src="img/Terbaik12.jpeg" class="card-img-top rounded-0" alt="...">
              <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                style="margin-left: -45px; margin-top: 17px;">
                <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
              </button>
              <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">BARU</p>
            </div>
            <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
              <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
              <p class="card-text fs-vs" style="margin-top: -7px;">SANDAL ASTIR ADIDAS</p>
              <p class="card-text fs-vs mb-3" style="margin-top: -10px;">Rp. 1.300.000</p>
              <p class="card-text fs-vs text-muted"></p>
            </div>
          </div>
        </a>
      </div>
      <!-- akhir produk 2.1 -->
      <!-- produk 2.1 -->
      <div class="col">
        <a href="#" class="text-black nav-link hover-border" style="height: 450px;">
          <div class="card border-0">
            <div class="">
              <img src="img/Terbaik12.jpeg" class="card-img-top rounded-0" alt="...">
              <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                style="margin-left: -45px; margin-top: 17px;">
                <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
              </button>
              <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">BARU</p>
            </div>
            <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
              <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
              <p class="card-text fs-vs" style="margin-top: -7px;">SANDAL ASTIR ADIDAS</p>
              <p class="card-text fs-vs mb-3" style="margin-top: -10px;">Rp. 1.300.000</p>
              <p class="card-text fs-vs text-muted"></p>
            </div>
          </div>
        </a>
      </div>
      <!-- akhir produk 2.1 --> --}}
    </div>
    <!-- akhir produk -->
  </div>
  <!-- Akhir Produk -->
  <!-- tentang adidas -->
  <div class="bg-grey">
    <div class="container d-flex gap-5 py-4">
      <div class="w-50 my-5">
        <p class="fs-s fw-bold">KOLEKSI SEPATU PRIA TERBARU UNTUK SETIAP KEBUTUHAN</p>
        <p class="fs-s">Adidas menyediakan koleksi sepatu pria original dengan model terbaru dan kualitas terbaik yang
          tersedia untuk memenuhi kebutuhan anda. Kami terus memenuhi kebutuhan Anda untuk segala aspek sepatu,
          termasuk jenis sepatu kulit. Memberi perhatian untuk kategori sepatu pria menjadi bagian penting dalam
          fashion pria. Jangan hanya berhenti pada sepatu! Nikmati berbagai macam koleksi produk yang menarik lainnya
          seperti sandal pria dengan berbagai gaya, model, bahan hingga ukuran yang dapat memenuhi kebutuhan footwear
          Anda.</p>
        <p class="fs-s fw-bold">BELANJA SEPATU PRIA TANPA MENGGANGGU AKTIVITAS ANDA</p>
        <p class="fs-s">Nikmati kemudahan berbelanja sepatu pria terbaru anda secara online di Adidas yang kini telah
          menjadi tren baru di Indonesia. Ada banyak keuntungan dari layanan berbelanja online, salah satunya adalah
          anda dapat mengakses berbagai barang, pembayaran, pengiriman. Untuk setiap jenis sepatu pria terbaru yang
          anda inginkan, kegiatan berbelanja tidak akan mengganggu aktivitas anda. Dapatkan berbagai macam warna
          sepatu dan pattern atau pola menarik yang mencerminkan kepribadian anda. <span class="fw-bold">Sepatu pria
            hitam</span>, putih atau berpola, semua bisa anda dapatkan di adidas online store. Temukan setiap produk
          adidas tersaji dilayar anda ketika anda di rumah atau di kantor. Dengan tampilan toko online dan aplikasi
          yang menarik dan mudah, setiap produk memiliki deskripsi lengkap untuk semua informasi yang anda butuhkan
          tentang sepatu dan sandal pria di kategori ini.</p>
        <p class="fs-s fw-bold">INOVASI DAN KUALITAS DALAM SEPATU OLAHRAGA ADIDAS</p>
        <p class="fs-s">Apa yang menjadi sepatu favorit anda saat ini? Apakah itu sepatu sneakers, slip on, sandal
          pria, sepatu pria casual hingga sepatu kulit? Semua kebutuhan anda akan fashion pria hingga olahraga kami
          sediakan di toko online resmi adidas Indonesia. Menggunakan bahan berkualitas terbaik dan tahan lama dengan
          memperhatikan fungsi setiap produk, sepatu adidas melahirkan inovasi dan kreatifitas terbaik yang hadir
          untuk anda. Untuk kebutuhan anda akan olahraga mulai <span class="fw-bold">sepatu lari / running, sepatu
            basket, sepatu futsal</span>, hingga sepatu pria casual yang anda gunakan sehari-hari untuk menemani
          aktivitas anda di kantor, liburan, dan lainnya, semua tersedia disini. Dalam hal layanan pengiriman, kami
          memiliki sistem pengiriman terpadu dan tersistem dengan baik yang dapat memastikan seluruh pesanan anda akan
          terkirim dengan baik ke seluruh wilayah Indonesia.</p>
      </div>
      <div class="w-50 my-5">
        <p class="fs-s fw-bold">TIPS MEMILIH SEPATU PRIA TERBARU</p>
        <p class="fs-s">Penampilan yang terbaik dan keren dapat meningkatkan kepercayaan diri saat anda beraktivitas
          diluar. Tampil dengan baju adidas yang casual disertai dengan sepatu pria adidas sebagai footwear anda,
          membuat penampilan anda semakin menarik.
          <br><br>
          Sepatu adalah salah satu komponen yang penting dalam penampilan fashion anda. Tunjukkan karakter kuat anda
          melalui pakaian dan sepatu yang anda kenakan. Sepatu pria casual atau sepatu sneakers seperti adidas
          superstar, adidas stan smith, hingga sepatu Pharrell Williams bisa menjadi pilihan untuk aktivitas
          sehari-hari anda, baik ke kampus atau ke kantor. Efisiensikan waktu anda dengan memilih sepatu tanpa tali
          atau slip on adidas tanpa mengurangi tampilan fashion anda. Selain itu, temukan sepatu-sepatu terbaru dan
          terkeren lainnya seperti <span class="fw-bold">sepatu adidas NMD R1</span> hingga sandal Adilette Slides
          Adidas untuk melengkapi penampilan anda. Untuk acara formal dan semi-formal, anda dapat memilih sepatu yang
          berbahan leather atau kulit untuk menunjang karakter dan kharisma anda.
          <br><br>
          Memilih sepatu juga tidak hanya memperhatikan fungsi atau trend sekarang, tetapi juga bahan pembuatannya.
          Sepatu adidas menggunakan berbagai macam bahan sepatu mulai dari leather atau kulit hingga bahan canvas.
          Dengan jenis bahan kain yang breathable dengan bantalan yang responsive membuat anda nyaman melangkah hingga
          berlari menggunakan sepatu adidas terbaru dari koleksi original ini. Bahan kanvas memerlukan perawatan rutin
          dan khusus, sehingga memilih sepatu dengan bahan kulit atau sintesis bisa menjadi pilihan yang tepat bagi
          anda yang tidak ingin menghabiskan banyak waktu. Pembuatan sepatu pria terbaru yang berkualitas dapat anda
          temukan dalam setiap produk adidas.
        </p>
      </div>
    </div>
  </div>
</div>
<!-- akhir tentang adidas -->
</div>
@endsection

@section('script')
<script src="js/kategori.js"></script>
@endsection