<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title }}</title>
  <!-- link  -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/bootstrap.css.map" />
  <link rel="stylesheet" href="css/mystyle.css">
</head>

<body style="overflow-x: hidden;">
  <!-- navbar -->
  <nav
    class="navbar navbar-expand-lg bg-body-tertiary py-0 navbar-white bg-white position-fixed start-0 end-0 top-0 border-bottom"
    style="z-index: 99999999999999; transition: 0.3s;">
    <div class="container-fluid">
      <!-- brand -->
      <a class="navbar-brand w-16" href="#">Image-Adidas</a>
      <!-- hamburger menu -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- isi -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <!-- offcanvas label -->
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Adidas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- navbar atas -->
        <div class="collapse navbar navbar-collapse py-0">
          <ul class="navbar-nav ms-auto mb-lg-0">
            <li class="nav-item me-3">
              <a class="nav-link active p-0" aria-current="page" href="#"><span class="fs-vs">status pesanan</span></a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link active p-0" aria-current="page" href="#"><span class="fs-vs">bantuan</span></a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link active p-0" aria-current="page" href="#"><span class="fs-vs">daftar
                  newsletter</span></a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link active p-0" aria-current="page" href="#"><span class="fs-vs">nega</span></a>
            </li>
            <li class="nav-item me-3">
              @auth
              <p class="fs-vs mb-0">Selamat Datang Kembali <a href="/AkunSaya"
                  class="px-0 fs-vs nav-link text-black d-inline">{{
                  Auth::user()->namaDepan
                  }}</a></p>
              @else
              <a class="nav-link active p-0" aria-current="page" href="/login"><span class="fs-vs">masuk</span></a>
              @endauth
            </li>
          </ul>
        </div>
        <!-- navbar bawah -->
        <div class="collapse navbar-collapse mt-25">
          <!-- dropdown -->
          <div class="w-100">
            <ul class="navbar-nav m-auto w-28rem mb-2 mb-lg-0">
              <!-- Pria -->
              <li class="nav-item fs-s">
                <a class="nav-link fw-bolder text-black pb-3 px-3" id="dropdown-navbar" href="pria">
                  PRIA
                </a>
                <ul class="d-none position-absolute bg-white border-top w-100 start-0">
                  <!-- menu -->
                  <div class="d-flex pt-4 w-90 m-auto pb-2">
                    <!-- features(pria) -->
                    <div class="w-115 border-end">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item border-0 py-0">
                          <a class="nav-link fw-bold text-black hover-line" style="letter-spacing: 2px"
                            href="#">FEATURED</a>
                        </li>
                        <li class="list-group-item border-0 py-0">
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">New Arrivals</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Exclusive at adidas</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Ultraboost</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">NMD</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Forum</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Superstar</a>
                          <a class="nav-link text-danger fw-bold d-block py-0 hover-line" href="#">Sale</a>
                          <a class="nav-link text-black fw-bold d-block py-0 hover-line" href="#">Last Chance</a>
                        </li>
                        <li class="list-group-item border-0">
                          <a class="nav-link text-black fw-bold d-block mt-5 py-0" href="#">Lihat Semua Pria</a>
                        </li>
                      </ul>
                    </div>
                    <!-- sepatu(Pria) -->
                    <div class="w-100 bg-white ps-3">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item border-0 py-0">
                          <a class="nav-link fw-bold text-black hover-line" style="letter-spacing: 2px"
                            href="#">SEPATU</a>
                        </li>
                        <li class="list-group-item border-0 py-0">
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Originals</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Training</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Running</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Sepak Bola</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Basket</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Tenis</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Essentials</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Slides</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Outdoor</a>
                        </li>
                        <li class="list-group-item border-0">
                          <a class="nav-link text-black fw-bold d-block mt-4 py-0" href="#">Lihat Semua Sepatu</a>
                        </li>
                      </ul>
                    </div>
                    <!-- pakaian(Pria) -->
                    <div class="w-100 bg-white ps-3">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item border-0 py-0">
                          <a class="nav-link fw-bold text-black hover-line" style="letter-spacing: 2px"
                            href="#">PAKAIAN</a>
                        </li>
                        <li class="list-group-item border-0 py-0">
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Atasan</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Jerseys</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Bawahan</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Celana Panjang & Celana
                            Ketat</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Jaket & Track Top</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Hoodies/Sweatshirts</a>
                        </li>
                        <li class="list-group-item border-0">
                          <a class="nav-link text-black fw-bold d-block mt-7 py-0" href="#">Lihat Semua Pakaian</a>
                        </li>
                      </ul>
                    </div>
                    <!-- aksesoris(Pria) -->
                    <div class="w-100 bg-white ps-3">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item border-0 py-0">
                          <a class="nav-link fw-bold text-black hover-line" style="letter-spacing: 2px"
                            href="#">AKSESORIS</a>
                        </li>
                        <li class="list-group-item border-0 py-0">
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Tas</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Topi & Headband<a
                              class="nav-link text-black d-block py-0 hover-line" href="#">Kaos Kaki</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="#">Bola</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="#">Sarung Tangan & Deker</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="#">Aksesoris Lainnya</a>
                        </li>
                        <li class="list-group-item border-0">
                          <a class="nav-link text-black fw-bold d-block mt-7 py-0" href="#">Lihat Semua Aksesoris</a>
                        </li>
                      </ul>
                    </div>
                    <!-- sport(Pria) -->
                    <div class="w-100 bg-white ps-3">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item border-0 py-0">
                          <a class="nav-link fw-bold text-black hover-line" style="letter-spacing: 2px"
                            href="#">SPORTS</a>
                        </li>
                        <li class="list-group-item border-0 py-0">
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Sepak Bola</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Training</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Running</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Basket</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Tenis</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Golf</a>
                          <a class="nav-link text-black d-block py-0 hover-line" href="#">Outdoor</a>
                          <a class="nav-link text-black fw-bold d-block py-0 hover-line" href="#">Sepeda</a>
                        </li>
                        <li class="list-group-item border-0">
                          <a class="nav-link text-black fw-bold d-block mt-4-7 py-0" href="#">Lihat Semua Sport</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </ul>
              </li>
              <!-- akhir pria -->
              <!-- wanita -->
              <li class="nav-item fs-s">
                <a class="nav-link fw-bolder text-black pb-3 pe-3" id="dropdown-navbar" href="#">
                  WANITA
                </a>
                <ul class="d-none position-absolute bg-white border-top w-100 start-0">
                  <li><a class="dropdown-item" href="#">Wanita</a></li>
                </ul>
              </li>
              <!-- akhir wanita -->
              <!-- anak -->
              <li class="nav-item fs-s">
                <a class="nav-link fw-bolder text-black pb-3 pe-3" id="dropdown-navbar" href="#">
                  ANAK
                </a>
                <ul class="d-none position-absolute bg-white border-top w-100 start-0">
                  <li><a class="dropdown-item" href="#">Anak</a></li>
                </ul>
              </li>
              <!-- akhir anak -->
              <!-- olahraga -->
              <li class="nav-item fs-s">
                <a class="nav-link text-black pb-3 pe-3" href="#" id="dropdown-navbar">
                  OLAHRAGA
                </a>
                <ul class="d-none position-absolute bg-white border-top w-100 start-0">
                  <li><a class="dropdown-item" href="#">Olahraga</a></li>
                </ul>
              </li>
              <!-- akhir olahraga -->
              <!-- brands -->
              <li class="nav-item fs-s">
                <a class="nav-link text-black pb-3 pe-3" href="#" id="dropdown-navbar">
                  BRANDS
                </a>
                <ul class="d-none position-absolute bg-white border-top mt-0.8 w-100 start-0">
                  <li><a class="dropdown-item" href="#">Brands</a></li>
                </ul>
              </li>
              <!-- akhir brands -->
              <!-- promo -->
              <li class="nav-item fs-s">
                <a class="nav-link fw-bolder text-black pb-3 pe-3" id="dropdown-navbar" href="#">
                  PROMO
                </a>
                <ul class="d-none position-absolute bg-white border-top mt-0.8 w-100 start-0">
                  <li><a class="dropdown-item" href="#">Promo</a></li>
                </ul>
              </li>
              <!-- akhir promo -->
            </ul>
          </div>
          <!-- search -->
          <form class="d-flex position-relative bg-grey mb-2 border-0" style="width: 26%" role="search">
            <input class="border-0 bg-grey py-2 px-3 fs-vs" style="width: 90%" type="search" placeholder="Cari"
              aria-label="Search" />
            <button class="border-0 bg-grey position-absolute end-0 h-100 px-2" type="submit">
              S
            </button>
          </form>
          <a class="nav-link mx-4">ke</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <!-- main section -->
  @yield('main')
  <!-- akhir main section -->

  <!-- footer -->
  <footer>
    <div class="bg-black pb-4" style="margin-left: -80px;">
      <div class="container d-flex gap-5 justify-content-center">
        <div class="w-50">
          <p class="text-white fw-bold fs-3 m-auto mt-4" style="width: 70%;line-height: 25px;">DAFTARKAN EMAIL ANDA
            UNTUK MENDAPATKAN INFO DAN PENAWARAN SPESIAL</p>
        </div>
        <!-- search -->
        <form class="d-flex position-relative mb-2 border-0 mt-5 ms-5" style="width: 26%; height: 50px;" role="search">
          <input class="border-0 bg-grey py-2 px-3 fs-6" style="width: 90%" type="search"
            placeholder="Alamat Email Anda*" aria-label="Search" />
          <button class="border-0 bg-black text-white position-absolute end-0 h-100 px-2" type="submit">
            ---->
          </button>
        </form>
      </div>
    </div>
    <div class="bg-white">
      <div class="container d-flex gap-5 justify-content-center">
        <div class=" my-5 me-4">
          <p class="fs-5 fw-bold">PRODUK</p>
          <a class="text-black d-block hover-line nav-link" href="#">Sepatu</a>
          <a class="text-black d-block hover-line nav-link" href="#">Pakaian</a>
          <a class="text-black d-block hover-line nav-link" href="#">Aksesoris</a>
          <p class="fs-5 mt-4 fw-bold">FEATURED</p>
          <a class="text-black d-block hover-line nav-link" href="#">New Arrivals</a>
          <a class="text-black d-block hover-line nav-link" href="#">Impossible is Nothing</a>
          <a class="text-black d-block hover-line nav-link" href="#">Sale</a>
          <a class="text-black d-block hover-line nav-link" href="#">Last Chance</a>
        </div>
        <div class="my-5">
          <p class="fs-5 fw-bold">SPORT</p>
          <a class="text-black d-block hover-line nav-link" href="#">Predator Football Boots</a>
          <a class="text-black d-block hover-line nav-link" href="#">X Football Boots</a>
          <a class="text-black d-block hover-line nav-link" href="#">Copa Football Boots</a>
          <a class="text-black d-block hover-line nav-link" href="#">Manchester United</a>
          <a class="text-black d-block hover-line nav-link" href="#">Juventus</a>
          <a class="text-black d-block hover-line nav-link" href="#">Real Madrid</a>
          <a class="text-black d-block hover-line nav-link" href="#">Arsenal</a>
          <a class="text-black d-block hover-line nav-link" href="#">Bayern Munchen</a>
          <a class="text-black d-block hover-line nav-link" href="#">Boost Shoes</a>
          <a class="text-black d-block hover-line nav-link" href="#">Ultraboost</a>
        </div>
        <div class="my-5 me-5">
          <p class="fs-5 fw-bold">KOLEKSI</p>
          <a class="text-black d-block hover-line nav-link" href="#">Stan Smith</a>
          <a class="text-black d-block hover-line nav-link" href="#">Superstar</a>
          <a class="text-black d-block hover-line nav-link" href="#">Ultraboost</a>
          <a class="text-black d-block hover-line nav-link" href="#">NMD</a>
          <a class="text-black d-block hover-line nav-link" href="#">adidas Exclusive</a>
        </div>
        <div class="my-5">
          <p class="fs-5 fw-bold">LEGAL</p>
          <a class="text-black d-block hover-line nav-link" href="#">Kebijakan Privasi</a>
          <a class="text-black d-block hover-line nav-link" href="#">Syarat dan Ketentuan</a>
          <a class="text-black d-block hover-line nav-link" href="#">Ketentuan Pengiriman</a>
          <p class="fs-5 mt-4 fw-bold">SUPPORT</p>
          <a class="text-black d-block hover-line nav-link" href="#">Hubungi Kami</a>
          <a class="text-black d-block hover-line nav-link" href="#">Panduan Ukuran</a>
          <a class="text-black d-block hover-line nav-link" href="#">Cara Berbelanja</a>
          <a class="text-black d-block hover-line nav-link" href="#">Promo & Voucher</a>
          <a class="text-black d-block hover-line nav-link" href="#">Pembayaran</a>
          <a class="text-black d-block hover-line nav-link" href="#">Pengiriman</a>
          <a class="text-black d-block hover-line nav-link" href="#">Retur dan Pengembalian Dana</a>
          <a class="text-black d-block hover-line nav-link" href="#">Tentang Produk adidas</a>
          <a class="text-black d-block hover-line nav-link" href="#">Cara Menggunakan Situs Kami</a>
          <a class="text-black d-block hover-line nav-link" href="#">Akun Anda</a>
          <a class="text-black d-block hover-line nav-link" href="#">Cek Status Pesanan</a>
        </div>
      </div>
    </div>
    </div>
    <div class="bg-dark pt-2">
      <div class="d-flex justify-content-around">
        <a href="#" class="nav-link text-secondary hover-line fs-vs">Indonesia</a>
        <div class="d-flex">
          <a href="#" class="nav-link text-secondary hover-line fs-vs">Privacy Policy | </a>
          <a href="#" class="nav-link text-secondary hover-line fs-vs">&nbsp; Term and Conditions</a>
          <p class="text-secondary ms-3 fs-vs">© 2021 adidas Indonesia</p>
        </div>
      </div>
    </div>

  </footer>
  <!-- akhir footer -->

  <!-- script -->
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/bootstrap.bundle.js.map"></script>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/script.js"></script>
  @yield('script')

  <!-- ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>