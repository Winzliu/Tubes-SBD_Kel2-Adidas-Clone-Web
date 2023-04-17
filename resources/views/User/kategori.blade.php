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
      <p class="fs-s ms-3">Pria</p>
    </div>
    <!-- akhir head -->
    <!-- kategori/Filter -->
    <div class="position-relative">
      <p class="text-muted fs-vs mb-4"><span class="fs-2 text-black fw-bold fst-italic me-2">PRIA</span> [3622]</p>

      <div class="d-flex border border-1 border-dark justify-content-between" id="navbar-1" style="z-index: 999;">
        <div class="p-1">
          <div class="btn-group">
            <button class="dropdown-toggle border-0 bg-white p-2 hover-border" id="dropdown-border" type="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <span class="fs-s" style="letter-spacing: 2px;">HARGA </span>
            </button>
            <button class="dropdown-toggle border-0 bg-white p-2 hover-border" id="dropdown-border" type="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <span class="fs-s" style="letter-spacing: 2px;">UKURAN </span>
            </button>
            <button class="dropdown-toggle border-0 bg-white p-2 hover-border" id="dropdown-border" type="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <span class="fs-s" style="letter-spacing: 2px;">DISKON </span>
            </button>
            <button class="dropdown-toggle border-0 bg-white p-2 hover-border" id="dropdown-border" type="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <span class="fs-s" style="letter-spacing: 2px;">CORPORATE MARKETING LINE </span>
            </button>
            <button class="dropdown-toggle border-0 bg-white p-2 hover-border" id="dropdown-border" type="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <span class="fs-s" style="letter-spacing: 2px;">TIPE PRODUK </span>
            </button>
          </div>
        </div>
        <div class="p-1">
          <div class="btn-group">
            <button class="border-0 bg-white p-2 hover-border" id="dropdown-border" type="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <span class="fs-s" style="letter-spacing: 2px;">LEBIH BANYAK FILTER <span class="fs-5">+</span></span>
            </button>
            <button class="dropdown-toggle border-0 bg-white p-2 hover-border" id="dropdown-border" type="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <span class="fs-s" style="letter-spacing: 2px;">RECOMMENDED </span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir kategori/Filter -->
    <!-- produk -->
    <div class="row row-cols-4 mt-4 ms-1">
      <!-- produk 1.1 -->
      <div class="col">
        <a href="sepatu.html" class="text-black nav-link mb-3 hover-produk" style="height: 450px;" id="produk">
          <div class="card border-0">
            <div class="">
              <img src="img/Produk1.1.jpeg" class="card-img-top rounded-0" alt="...">
              <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                style="margin-left: -45px; margin-top: 17px;">
                <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
              </button>
              <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">BARU</p>
            </div>
            <div class="mt-1 bg-grey d-flex d-none px-2" id="image-produk">
              <button onclick="return false;" class="border-0"><img src="img/Produk1.1.jpeg"
                  class="border-bottom border-dark border-2 hover-border-bottom" width="50px" alt=""></button>
              <button onclick="return false;" class="border-0"><img src="img/Produk1.2.jpeg" class="hover-border-bottom"
                  width="50px" alt=""></button>
            </div>
            <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
              <p class="card-text mt-1 fs-vs text-muted">Pria Lifestyle</p>
              <p class="card-text fs-vs" style="margin-top: -7px;">SEPATU SAMBA OG</p>
              <p class="card-text fs-vs mb-3" style="margin-top: -10px;">Rp. 2.200.000</p>
              <p class="card-text fs-vs text-muted mb-2">2 warna</p>
            </div>
          </div>
        </a>
      </div>
      <!-- akhir produk 1.1 -->
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
      <!-- akhir produk 2.1 -->
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