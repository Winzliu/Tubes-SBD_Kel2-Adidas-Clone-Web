@extends('layouts.layoutIndex')

@section('main')
<div class="position-relative mt-7">
  <!-- 3 navbar -->
  <div class="d-flex justify-content-center border-bottom gap-5" id="1">
    <a class="nav-link hover-line fs-s py-2">GRATIS ONGKIR UNTUK PESANAN MIN. 900RB</a>
    <a class="nav-link hover-line fs-s py-2">CHAT DENGAN KAMI</a>
    <a class="nav-link hover-line fs-s py-2">CICILAN AKULAKU TERSEDIA SEKARANG!</a>
  </div>
  <!-- akhir 3 navbar -->
  <!-- Pemaparan produk -->
  <div class="d-flex">
    <!-- gambar,deskripsi,dll -->
    <!-- carousel -->
    <div class="w-72 position-relative">
      <p class="fst-italic bg-white border-0 position-absolute end-0 top-0 fs-vs px-1 "
        style="margin-right: 10px; margin-top: 45px; letter-spacing: 2px; transform: rotate(-90deg);z-index: 9;">BARU
      </p>
      <div class="d-flex py-2 position-absolute start-0 top-0 ms-5 mt-3" style="z-index: 9;">
        <a href="#" class="nav-link hover-black text-decoration-underline fs-vs fw-bold"
          style="letter-spacing: 2px;">KEMBALI</a>
        <a href="#" class="fs-s ms-3 text-decoration-underline text-dark hover-black">Pria</a>
      </div>
      <div id="carouselExampleIndicators" style="background-color: #EDEFF0;" class="carousel slide">
        <div class="carousel-indicators">
          <img src="img/Produk1.1.jpeg" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
            class="active border border-dark h-100 carousel-sepatu" aria-current="true" aria-label="Slide 1">
          </img>
          <img src="img/Produk1.2.jpeg" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            class="border border-dark h-100 carousel-sepatu" aria-label="Slide 2"></img>
          <img src="img/Produk1.2.jpeg" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            class="border border-dark h-100 carousel-sepatu" aria-label="Slide 3"></img>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/Produk1.1.jpeg" class="d-block w-50 m-auto" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Produk1.2.jpeg" class="d-block w-50 m-auto" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
        </div>
        <!-- tombol balek -->
        <button id="back"
          class="carousel-control-prev opacity-100 ms-4 top-50 border-2 border-dark bg-white border text-black hover-black"
          style="width: 45px; height: 45px;" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span aria-hidden="true">
            <ion-icon name="chevron-back-outline"></ion-icon>
          </span>
          <span class="visually-hidden">Previous</span>
        </button>
        <!-- akhir tombol balek -->
        <!-- tombol selanjutnya -->
        <button id="next"
          class="carousel-control-next opacity-100 ms-4 top-50 me-4 border-2 border-dark bg-white border text-black hover-black"
          style="width: 45px; height: 45px;" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span aria-hidden="true">
            <ion-icon name="chevron-forward-outline"></ion-icon>
          </span>
          <span class="visually-hidden">Next</span>
        </button>
        <!-- akhir tombol selanjutnya -->
      </div>
      <!-- akhir carousel -->
      <!-- pilihan warna -->
      <div class="d-flex justify-content-center bg-white gap-2 py-3">
        <p class="fs-vvs text-center pt-2 m-0 fw-bold me-4" style="width: 60px;letter-spacing: 1px;">2 WARNA TERSEDIA
        </p>
        <div class="position-relative">
          <img src="img/Produk1.1.jpeg" class="border-bottom border-3 border-dark" width="50px" alt="">
          <p class="position-absolute top-0 end-0 bg-black rounded-circle"
            style="margin-right: -5px;margin-top: -5px;width: 20px; height: 20px;">
            <ion-icon class="fs-5 text-white fw-bold" name="checkmark-outline" style="width: 20px;height: 20px;">
            </ion-icon>
          </p>
        </div>
        <a href="#">
          <img src="img/Produk1.2.jpeg" width="50px" alt="">
        </a>
      </div>
      <!-- akhir pilihan warna -->
      <!-- menu -->
      <div id="navbar-menu" class="d-flex justify-content-center gap-4 border border-start-0 border-end-0 bg-white"
        style="z-index: 999;">
        <button class="hover-border-bottom border-0 bg-white" id="galeri">
          <p class="fs-vs m-0 py-3 d-block text-black " style="letter-spacing: 2px;">GALERI</p>
        </button>
        <div class="hover-border-bottom" id="deskripsi">
          <button class="fs-vs m-0 py-3 d-block text-black nav-link border-0 bg-white"
            style="letter-spacing: 2px;">DESKRIPSI</button>
        </div>
        <div class="hover-border-bottom" id="detail">
          <button class="fs-vs m-0 py-3 d-block text-black nav-link border-0 bg-white"
            style="letter-spacing: 2px;">DETAIL</button>
        </div>
        <div class=" hover-border-bottom" id="ulasan">
          <button class="fs-vs m-0 py-3 d-block text-black nav-link border-0 bg-white"
            style="letter-spacing: 2px;">ULASAN</button>
        </div>
      </div>
      <!-- akhir menu -->
      <!-- Deskripsi -->
      <div class="my-5 mx-5 px-5">
        <p class="fs-3 fw-bold mb-2">SEPATU SAMBA OG</p>
        <p class="fst-italic fw-bolder mb-2">TAMPILAN DAN SENSASI KLASIK DARI SAMBA YANG AUTENTIK.</p>
        <p class="fs-s">Diciptakan untuk sepak bola indoor, Samba menjadi ikon street style yang tak lekang oleh waktu.
          Sepatu ini tetap mempertahankan warisannya dengan upper kulit lembut dan overlay berbahan suede.</p>
      </div>
      <!-- akhir deskripsi -->
      <!-- Deskripsi -->
      <div class="my-5 mx-5 px-5">
        <p class="fs-3 fw-bold mb-2">SPESIFIKASI</p>
        <ul class="w-100">
          <li class="fs-vs ps-3 ">Regular fit</li>
          <li class="fs-vs ps-3">Upper berbahan kulit full grain dengan suede bertekstur dan detail gold foil</li>
          <li class="fs-vs ps-3">Outsole berbahan karet gum</li>
          <li class="fs-vs ps-3">Menggunakan tali sepatu</li>
          <li class="fs-vs ps-3">Bagian lining dibuat dari bahan kulit sintetis; Cupsole berbahan karet gum</li>
          <li class="fs-vs ps-3">Kode produk: B75807</li>
        </ul>
      </div>
      <!-- akhir deskripsi -->

      <!-- Suggestion mungkin suka -->
      <div class="my-5 mx-5 px-5">
        <p class="fs-3 fw-bold mb-2">ANDA MUNGKIN JUGA MENYUKAI</p>
        <!-- Produk terbaik -->
        <!-- carousel -->
        <div id="carouselExampleIndicators1" class="carousel slide px-4 m-auto" style="width: 100%;">
          <!-- indikator carousel -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0"
              class="active bg-dark" id="first1" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators1" class="bg-dark" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators1" class="bg-dark" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
            <button type="button" id="last1" data-bs-target="#carouselExampleIndicators1" class="bg-dark"
              data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <!-- akhir indikator carousel -->
          <!-- isi carousel -->
          <div class="carousel-inner pb-5">
            <!-- halaman 1 -->
            <div class="carousel-item active bg-white">
              <div class="d-flex gap-2 m-auto w-100">
                <!-- Terbaik 1 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik1.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">SLIDES ADILETTE AYOON</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 900.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 1 carousel -->

                <!-- Terbaik 2 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik2.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Pria Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">TRACK JACKET ADICOLOR CONTEMPO (UNISEKS)</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.700.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 2 carousel -->

                <!-- Terbaik 3 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik3.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Pria Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">ADILETTE 4.0 SANDALS</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.100.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 3 carousel -->

                <!-- Terbaik 4 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik4.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">ADICOLOR HERITAGE NOW KNOT SKIRT</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.600.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 4 carousel -->
              </div>
            </div>
            <!-- akhir halaman 1 -->

            <!-- halaman 2 -->
            <div class="carousel-item bg-white">
              <div class="d-flex gap-2 m-auto w-100">
                <!-- Terbaik 5 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik5.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">ADICOLOR HERITAGE NOW CALI TEE DRESS</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.100.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 5 carousel -->

                <!-- Terbaik 6 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik6.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Pria Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">TRACK PANTS ADICOLOR CLASSICS FIREBIRD
                        PRIMEBLUE</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.400.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 6 carousel -->

                <!-- Terbaik 7 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik7.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Uniseks Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">ADICANE CLOGS</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 750.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 7 carousel -->

                <!-- Terbaik 8 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik8.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Unisexs Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">TERREX CYPREX ULTRA DLX SANDALS</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.000.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 8 carousel -->
              </div>
            </div>
            <!-- akhir halaman 2 -->

            <!-- halaman 3 -->
            <div class="carousel-item bg-white">
              <div class="d-flex gap-2 m-auto w-100">
                <!-- Terbaik 9 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik9.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                      <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                        style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">
                        BARU</p>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">ADILETTE AYOON SLIDES</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 900.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 9 carousel -->

                <!-- Terbaik 10 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik10.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                      <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                        style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">
                        BARU</p>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Pria Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">SLIDES ADIFORM ADILETTE</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 800.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 10 carousel -->

                <!-- Terbaik 11 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik11.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                      <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                        style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">
                        BARU</p>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">ADILETTE ADVENTURE SANDALS</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.100.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 11 carousel -->

                <!-- Terbaik 12 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik12.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                      <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                        style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">
                        BARU</p>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">SANDAL ASTIR ADIDAS</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.300.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 12 carousel -->
              </div>
            </div>
            <!-- akhir halaman 3 -->

            <!-- halaman 4 -->
            <div class="carousel-item bg-white">
              <div class="d-flex gap-2 m-auto w-100">
                <!-- Terbaik 13 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik13.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                      <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                        style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">
                        BARU</p>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Wanita Running</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">SANDAL ADIDAS BY STELLA MCCARTNEY</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 2.600.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 13 carousel -->

                <!-- Terbaik 14 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik14.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                      <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                        style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">
                        BARU</p>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">ADILETTE ESSENTIAL SLIDES</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 840.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 14 carousel -->

                <!-- Terbaik 15 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik15.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                      <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                        style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">
                        BARU</p>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">ADILETTE ADVENTURE SANDALS</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.100.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 15 carousel -->

                <!-- Terbaik 16 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik16.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                      <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                        style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">
                        BARU</p>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Pria Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">ADIMULE LEA SLIDES</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.400.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 16 carousel -->
              </div>
            </div>
            <!-- akhir halaman 4 -->
          </div>
          <!-- tombol balek -->
          <button id="back1"
            class="carousel-control-prev opacity-100 ms-4 top-50 border-2 border-dark bg-white border text-black hover-black"
            style="width: 25px; height: 25px;" type="button" data-bs-target="#carouselExampleIndicators1"
            data-bs-slide="prev">
            <span aria-hidden="true">
              <ion-icon name="chevron-back-outline"></ion-icon>
            </span>
            <span class="visually-hidden">Previous</span>
          </button>
          <!-- akhir tombol balek -->
          <!-- tombol selanjutnya -->
          <button id="next1"
            class="carousel-control-next opacity-100 ms-4 top-50 me-4 border-2 border-dark bg-white border text-black hover-black"
            style="width: 25px; height: 25px;" type="button" data-bs-target="#carouselExampleIndicators1"
            data-bs-slide="next">
            <span aria-hidden="true">
              <ion-icon name="chevron-forward-outline"></ion-icon>
            </span>
            <span class="visually-hidden">Next</span>
          </button>
          <!-- akhir tombol selanjutnya -->
        </div>
        <!-- akhir carousel -->
        <!-- akhir Produk terbaik -->
      </div>
      <!-- akhir suggestion mungkin suka -->

      <!-- Pelanggan lain juga membeli -->
      <div class="my-5 mx-5 px-5">
        <p class="fs-3 fw-bold mb-2">PELANGGAN LAIN JUGA MEMBELI</p>
        <!-- Produk terbaik -->
        <!-- carousel -->
        <div id="carouselExampleIndicators2" class="carousel slide px-4 m-auto" style="width: 100%;">
          <!-- indikator carousel -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0"
              class="active bg-dark" id="first2" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators2" class="bg-dark" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators2" class="bg-dark" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
            <button type="button" id="last2" data-bs-target="#carouselExampleIndicators2" class="bg-dark"
              data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <!-- akhir indikator carousel -->
          <!-- isi carousel -->
          <div class="carousel-inner pb-5">
            <!-- halaman 1 -->
            <div class="carousel-item active bg-white">
              <div class="d-flex gap-2 m-auto w-100">
                <!-- Terbaik 1 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik1.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">SLIDES ADILETTE AYOON</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 900.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 1 carousel -->

                <!-- Terbaik 2 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik2.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Pria Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">TRACK JACKET ADICOLOR CONTEMPO (UNISEKS)</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.700.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 2 carousel -->

                <!-- Terbaik 3 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik3.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Pria Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">ADILETTE 4.0 SANDALS</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.100.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 3 carousel -->

                <!-- Terbaik 4 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik4.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">ADICOLOR HERITAGE NOW KNOT SKIRT</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.600.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 4 carousel -->
              </div>
            </div>
            <!-- akhir halaman 1 -->

            <!-- halaman 2 -->
            <div class="carousel-item bg-white">
              <div class="d-flex gap-2 m-auto w-100">
                <!-- Terbaik 5 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik5.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">ADICOLOR HERITAGE NOW CALI TEE DRESS</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.100.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 5 carousel -->

                <!-- Terbaik 6 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik6.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Pria Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">TRACK PANTS ADICOLOR CLASSICS FIREBIRD
                        PRIMEBLUE</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.400.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 6 carousel -->

                <!-- Terbaik 7 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik7.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Uniseks Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">ADICANE CLOGS</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 750.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 7 carousel -->

                <!-- Terbaik 8 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik8.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Unisexs Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">TERREX CYPREX ULTRA DLX SANDALS</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.000.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 8 carousel -->
              </div>
            </div>
            <!-- akhir halaman 2 -->

            <!-- halaman 3 -->
            <div class="carousel-item bg-white">
              <div class="d-flex gap-2 m-auto w-100">
                <!-- Terbaik 9 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik9.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                      <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                        style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">
                        BARU</p>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">ADILETTE AYOON SLIDES</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 900.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 9 carousel -->

                <!-- Terbaik 10 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik10.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                      <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                        style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">
                        BARU</p>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Pria Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">SLIDES ADIFORM ADILETTE</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 800.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 10 carousel -->

                <!-- Terbaik 11 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik11.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                      <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                        style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">
                        BARU</p>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">ADILETTE ADVENTURE SANDALS</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.100.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 11 carousel -->

                <!-- Terbaik 12 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik12.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                      <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                        style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">
                        BARU</p>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">SANDAL ASTIR ADIDAS</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.300.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 12 carousel -->
              </div>
            </div>
            <!-- akhir halaman 3 -->

            <!-- halaman 4 -->
            <div class="carousel-item bg-white">
              <div class="d-flex gap-2 m-auto w-100">
                <!-- Terbaik 13 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik13.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                      <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                        style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">
                        BARU</p>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Wanita Running</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">SANDAL ADIDAS BY STELLA MCCARTNEY</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 2.600.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 13 carousel -->

                <!-- Terbaik 14 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik14.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                      <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                        style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">
                        BARU</p>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">ADILETTE ESSENTIAL SLIDES</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 840.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 14 carousel -->

                <!-- Terbaik 15 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik15.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                      <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                        style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">
                        BARU</p>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">ADILETTE ADVENTURE SANDALS</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.100.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 15 carousel -->

                <!-- Terbaik 16 carousel -->
                <a href="#" class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    <div class="">
                      <img src="img/Terbaik16.jpeg" class="card-img-top rounded-0" alt="...">
                      <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                        style="margin-left: -45px; margin-top: 17px;">
                        <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                      </button>
                      <p class="fst-italic bg-white border-0 position-absolute start-0 top-0 fs-vs px-1 "
                        style="margin-left: -5px; margin-top: 25px; letter-spacing: 2px; transform: rotate(-90deg);">
                        BARU</p>
                    </div>
                    <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                      <p class="card-text mt-1 fs-vs text-muted">Pria Lifestyle</p>
                      <p class="card-text fs-vs" style="margin-top: -7px;">ADIMULE LEA SLIDES</p>
                      <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.400.000</p>
                    </div>
                  </div>
                </a>
                <!-- akhir Terbaik 16 carousel -->
              </div>
            </div>
            <!-- akhir halaman 4 -->
          </div>
          <!-- tombol balek -->
          <button id="back2"
            class="carousel-control-prev opacity-100 ms-4 top-50 border-2 border-dark bg-white border text-black hover-black"
            style="width: 25px; height: 25px;" type="button" data-bs-target="#carouselExampleIndicators2"
            data-bs-slide="prev">
            <span aria-hidden="true">
              <ion-icon name="chevron-back-outline"></ion-icon>
            </span>
            <span class="visually-hidden">Previous</span>
          </button>
          <!-- akhir tombol balek -->
          <!-- tombol selanjutnya -->
          <button id="next2"
            class="carousel-control-next opacity-100 ms-4 top-50 me-4 border-2 border-dark bg-white border text-black hover-black"
            style="width: 25px; height: 25px;" type="button" data-bs-target="#carouselExampleIndicators2"
            data-bs-slide="next">
            <span aria-hidden="true">
              <ion-icon name="chevron-forward-outline"></ion-icon>
            </span>
            <span class="visually-hidden">Next</span>
          </button>
          <!-- akhir tombol selanjutnya -->
        </div>
        <!-- akhir carousel -->
      </div>
      <!-- akhir Pelanggan lain juga membeli -->

      <!-- ulasan -->
      <div class="my-5 mx-5 px-5">
        <p class="fs-4 fw-bold mb-2">Silakan masuk untuk menulis ulasan</p>
        <p class="fs-vs">Hanya pengguna terdaftar yang dapat menulis ulasan, Silakan <a href="#"
            class="text-black hover-black">masuk</a> atau <a href="#" class="text-black hover-black">registrasi</a></p>
        <p class="fs-3 fw-bold mb-2">JADILAH YANG PERTAMA MENGULAS PRODUK INI</p>
        <!-- Button trigger modal -->
        <button type="button" class="button-60 mt-3 m-auto" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Tulis ulasan pertama
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <div class="">
                  <h1 class="modal-title fs-4 fw-bold" id="staticBackdropLabel">TULIS ULASAN ANDA SENDIRI</h1>
                  <p class="fw-bold">Anda Sedang Mengulas <span class="fs-vs">Sepatu Samba OG</span></p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p class="fw-bold">BERI NILAI*</p>
                <!-- Quality -->
                <div class="d-flex gap-5">
                  <p class="fw-bold fs-vs">Quality</p>
                  <!-- bintang -->
                  <div class="form-check">
                    <label class="form-check-label" for="flexRadioDefault1">
                      5
                    </label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      4
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                    <label class="form-check-label" for="flexRadioDefault3">
                      3
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                    <label class="form-check-label" for="flexRadioDefault4">
                      2
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5" checked>
                    <label class="form-check-label" for="flexRadioDefault5">
                      1
                    </label>
                  </div>
                  <!-- akhir bintang -->
                </div>
                <!-- akhir quality -->
                <!-- Value -->
                <div class="d-flex gap-5">
                  <p class="fw-bold fs-vs">Value</p>
                  <!-- bintang -->
                  <div class="form-check">
                    <label class="form-check-label" for="flexRadioDefault6">
                      5
                    </label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7" checked>
                    <label class="form-check-label" for="flexRadioDefault7">
                      4
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8" checked>
                    <label class="form-check-label" for="flexRadioDefault8">
                      3
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault9" checked>
                    <label class="form-check-label" for="flexRadioDefault9">
                      2
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault10"
                      checked>
                    <label class="form-check-label" for="flexRadioDefault10">
                      1
                    </label>
                  </div>
                  <!-- akhir bintang -->
                </div>
                <!-- akhir value -->
                <!-- price -->
                <div class="d-flex gap-5">
                  <p class="fw-bold fs-vs">Price</p>
                  <!-- bintang -->
                  <div class="form-check">
                    <label class="form-check-label" for="flexRadioDefault11">
                      5
                    </label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault11">
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault12"
                      checked>
                    <label class="form-check-label" for="flexRadioDefault12">
                      4
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault13"
                      checked>
                    <label class="form-check-label" for="flexRadioDefault13">
                      3
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault14"
                      checked>
                    <label class="form-check-label" for="flexRadioDefault14">
                      2
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault15"
                      checked>
                    <label class="form-check-label" for="flexRadioDefault15">
                      1
                    </label>
                  </div>
                  <!-- akhir bintang -->
                </div>
                <!-- akhir price -->
                <hr>
                <!-- nama -->
                <p class="fw-bold">SEDIKIT INFO TENTANG ANDA...*</p>
                <p class="fw-bold fs-vs">Apa nama panggilan Anda?</p>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Nama Depan</label>
                </div>
                <!-- akhir nama -->
                <hr>
                <!-- pendapat -->
                <p class="fw-bold">SAMPAIKAN PENDAPAT ANDA</p>
                <p class="fw-bold fs-vs">Judul Ulasan</p>
                <textarea name="judulUlasan" id="judulUlasan" cols="58" rows="2"></textarea>
                <p class="fw-bold fs-vs">Ulasan</p>
                <textarea name="ulasan" id="ulasan" cols="58" rows="4"></textarea>
                <!-- akhir pendapat -->
              </div>
              <div class="modal-footer">
                <p class="fs-vs m-auto my-2">Dengan mengirimkan ulasan artinya Anda menyetujui <a href="#"
                    class="text-black hover-black">Syarat dan Ketentuan</a></p>
                <button type="button" class="bg-black text-white py-2">Kirim Ulasan ---></button>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- akhir ulasan -->
    </div>
    <!-- akhir gambar, deskripsi,dll -->

    <!-- harga -->
    <div class="w-100 px-5 py-4 vh-100" id="tampilanKanan">
      <!-- kategori dan beri ulasan -->
      <div class="d-flex justify-content-between">
        <div class="d-flex">
          <p class="fs-vs">Pria &bull;</p>
          <p class="fs-vs">Lifestyle &bull;</p>
        </div>
        <a href="#" class="fs-vs text-black hover-black">Tulis Ulasan</a>
      </div>
      <!-- akhir kategori dan beri ulasan -->

      <!-- merek -->
      <p class="fs-2 fw-bold fst-italic">SEPATU SAMBA OG</p>
      <p class="fs-vs ">BLACK/WHITE/BEIGE [B75807]</p>
      <p class="fs-vs fw-bold">Rp. 2.200.000</p>
      <!-- akhir merek -->

      <!-- ukuran -->
      <p class="fs-vvs fw-bold" style="letter-spacing: 3px;">PILIH SIZE</p>
      <div class="d-flex">
        <select class="form-select bg-white border-1 border-dark rounded-0 w-auto fw-bold fs-vs me-2 py-2"
          aria-label="Default select example">
          <option value="UK" selected>UK</option>
          <option value="2">EUROPE</option>
          <option value="3">US</option>
        </select>
        <select class="form-select bg-white border-1 border-dark rounded-0 w-auto fw-bold fs-vs"
          aria-label="Default select example">
          <option selected>UKURAN</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </div>
      <p class="text-danger fw-bold fs-vs my-2">Hanya 1 stok tersisa</p>
      <div class="d-flex gap-4 my-3">
        <a href="#" class="fs-vs fw-bold hover-black text-black">PANDUAN UKURAN</a>
        <a href="#" class=" fs-vs text-black hover-black">Ukuran yang dipilih habis?</a>
      </div>
      <!-- akhir ukuran -->

      <!-- tambah keranjang -->
      <div class="d-flex gap-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark rounded-0 w-100 fs-s fw-bold">
          TAMBAHKAN KE KERANJANG --->
        </button>
        <button class="bg-white py-1 px-2 wishlist">
          <ion-icon class="fs-3" name="heart-outline"></ion-icon>
        </button>
      </div>
      <!-- akhir tambah keranjang -->

      <!-- learn more -->
      <div class="d-flex my-3">
        <p class="align-self-center me-2">
          <ion-icon name="airplane-outline"></ion-icon>
        </p>
        <div class="">
          <p class="hover-black text-decoration-underline fs-vs my-0">Learn more</p>
          <p class="fs-vs">Free Delivery</p>
        </div>
      </div>
      <div class="d-flex">
        <p class="align-self-center me-2">
          <ion-icon name="alert-circle-outline"></ion-icon>
        </p>
        <div class="">
          <p class="hover-black text-decoration-underline fs-vs my-0">Learn more</p>
          <p class="fs-vs">Not the Right Size or colors</p>
        </div>
      </div>
      <div class="d-flex">
        <p class="align-self-center me-2">
          <ion-icon name="checkmark-outline"></ion-icon>
        </p>
        <div class="">
          <p class="hover-black text-decoration-underline fs-vs my-0">Learn more</p>
          <p class="fs-vs">Read our Terms and Conditions</p>
        </div>
      </div>
      <!-- akhir learn more -->

    </div>
    <!-- akhir harga -->
  </div>
  <!-- akhir pemaparan produk -->
</div>
@endsection

@section('script')
<script src="js/produks.js"></script>
@endsection