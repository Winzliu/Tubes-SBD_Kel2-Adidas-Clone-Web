<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title }}</title>
  <!-- link  -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css.map') }}" />
  <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
  <link rel="icon" href="{{ asset('img/logo.png')  }}">
</head>

<body style="overflow-x: hidden;">
  <!-- navbar -->
  <nav
    class="navbar navbar-expand-lg bg-body-tertiary py-0 navbar-white bg-white position-fixed start-0 end-0 top-0 border-bottom"
    style="z-index: 99999999999999; transition: 0.3s;">
    <div class="container-fluid">
      <!-- brand -->
      <a class="navbar-brand w-16" href="/"><img src="{{ asset('img/logo.png') }}" width="50px" class="ms-5" alt=""></a>
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
              @auth
              <p class="fs-vs mb-0">Selamat Datang Kembali <a href="/akunsaya"
                  class="px-0 fs-vs nav-link text-black d-inline">{{
                  auth()->user()->namaDepan
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
            <ul class="navbar-nav m-auto justify-content-center mb-2 mb-lg-0">
              <!-- Pria -->
              <li class="nav-item fs-s">
                <a class="nav-link fw-bolder text-black pb-3 px-3" id="dropdown-navbar" href="/pria">
                  PRIA
                </a>
                <ul class="d-none position-absolute bg-white border-top w-100 start-0">
                  <!-- menu -->
                  <div class="d-flex pt-4 w-90 m-auto pb-2">
                    <!-- sepatu(Pria) -->
                    <div class="w-100 bg-white ps-3">
                      <ul class="list-group list-group-flush h-100 d-flex justify-content-between">
                        <div class="">
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link fw-bold text-black hover-line" style="letter-spacing: 2px"
                              href="/pria/sepatu">SEPATU</a>
                          </li>
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/pria/sepatu/originals">Originals</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/pria/sepatu/training">Training</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/pria/sepatu/running">Running</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="/pria/sepatu/sepak-bola">Sepak
                              Bola</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="/pria/sepatu/basket">Basket</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="/pria/sepatu/tenis">Tenis</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/pria/sepatu/essentials">Essentials</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="/pria/sepatu/slides">Slides</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/pria/sepatu/outdoor">Outdoor</a>
                          </li>
                        </div>
                        <li class="list-group-item border-0">
                          <a class="nav-link text-black fw-bold d-block mt-4 py-0" href="/pria/sepatu">Lihat Semua
                            Sepatu</a>
                        </li>
                      </ul>
                    </div>
                    <!-- pakaian(Pria) -->
                    <div class="w-100 bg-white ps-3">
                      <ul class="list-group list-group-flush h-100 d-flex justify-content-between">
                        <div class="">
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link fw-bold text-black hover-line" style="letter-spacing: 2px"
                              href="/pria/pakaian">PAKAIAN</a>
                          </li>
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/pria/pakaian/atasan">Atasan</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/pria/pakaian/jerseys">Jerseys</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/pria/pakaian/bawahan">Bawahan</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/pria/pakaian/celana-panjang">Celana
                              Panjang & Celana
                              Ketat</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="/pria/pakaian/jaket">Jaket &
                              Track Top</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/pria/pakaian/hoodies">Hoodies/Sweatshirts</a>
                          </li>
                        </div>
                        <li class="list-group-item border-0">
                          <a class="nav-link text-black fw-bold d-block mt-7 py-0" href="/pria/pakaian">Lihat Semua
                            Pakaian</a>
                        </li>
                      </ul>
                    </div>
                    <!-- aksesoris(Pria) -->
                    <div class="w-100 bg-white ps-3">
                      <ul class="list-group list-group-flush h-100 d-flex justify-content-between">
                        <div class="">
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link fw-bold text-black hover-line" style="letter-spacing: 2px"
                              href="/pria/aksesoris">AKSESORIS</a>
                          </li>
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link text-black d-block py-0 hover-line" href="/pria/aksesoris/tas">Tas</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="/pria/aksesoris/topi">Topi &
                              Headband</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="/pria/aksesoris/kaos-kaki">Kaos
                              Kaki</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="/pria/aksesoris/bola">Bola</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/pria/aksesoris/sarung-tangan">Sarung Tangan & Deker</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/pria/aksesoris/aksesoris-lainnya">Aksesoris Lainnya</a>
                          </li>
                        </div>
                        <li class="list-group-item border-0">
                          <a class="nav-link text-black fw-bold d-block mt-7 py-0" href="/pria/aksesoris">Lihat Semua
                            Aksesoris</a>
                        </li>
                      </ul>
                    </div>
                    <!-- sport(Pria) -->
                    <div class="w-100 bg-white ps-3">
                      <ul class="list-group list-group-flush h-100 d-flex justify-content-between">
                        <div class="">
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link fw-bold text-black hover-line" style="letter-spacing: 2px"
                              href="/pria/sports">SPORTS</a>
                          </li>
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link text-black d-block py-0 hover-line" href="/pria/sports/sepak-bola">Sepak
                              Bola</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/pria/sports/training">Training</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/pria/sports/running">Running</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="/pria/sports/basket">Basket</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="/pria/sports/tenis">Tenis</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="/pria/sports/golf">Golf</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/pria/sports/outdoor">Outdoor</a>
                            <a class="nav-link text-black fw-bold d-block py-0 hover-line"
                              href="/pria/sports/sepeda">Sepeda</a>
                          </li>
                        </div>
                        <li class="list-group-item border-0">
                          <a class="nav-link text-black fw-bold d-block mt-4-7 py-0" href="/pria/sports">Lihat Semua
                            Sport</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </ul>
              </li>
              <!-- akhir pria -->
              <!-- wanita -->
              <li class="nav-item fs-s">
                <a class="nav-link fw-bolder text-black pb-3 pe-3" id="dropdown-navbar" href="/wanita">
                  WANITA
                </a>
                <ul class="d-none position-absolute bg-white border-top w-100 start-0">
                  <!-- menu -->
                  <div class="d-flex pt-4 w-90 m-auto pb-2">
                    <!-- sepatu(Wanita) -->
                    <div class="w-100 ps-3">
                      <ul class="list-group list-group-flush h-100 d-flex justify-content-between">
                        <div class="">
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link fw-bold text-black hover-line" style="letter-spacing: 2px"
                              href="/wanita/sepatu">SEPATU</a>
                          </li>
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/sepatu/originals">Originals</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/sepatu/training">Training</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/sepatu/running">Running</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="/wanita/sepatu/tenis">Tenis</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/sepatu/slides">Slides</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/sepatu/essentials">Essentials</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/sepatu/outdoor">Outdoor</a>
                          </li>
                        </div>
                        <li class="list-group-item border-0">
                          <a class="nav-link text-black fw-bold d-block py-0" href="/wanita/sepatu">Lihat Semua
                            Sepatu</a>
                        </li>
                      </ul>
                    </div>
                    <!-- pakaian(Wanita) -->
                    <div class="w-100 bg-white ps-3">
                      <ul class="list-group list-group-flush h-100 d-flex justify-content-between">
                        <div class="">
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link fw-bold text-black hover-line" style="letter-spacing: 2px"
                              href="/wanita/pakaian">PAKAIAN</a>
                          </li>
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link text-black d-block py-0 hover-line" href="/wanita/pakaian/dress">Dress &
                              Rok</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/pakaian/celana-panjang">Celana Panjang & Celana
                              Ketat</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/pakaian/sport-bra">Sport
                              Bra</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/pakaian/celana-pendek">Celana Pendek</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/pakaian/atasan">Atasan</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="/wanita/pakaian/jaket">Jaket &
                              Track Top</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/pakaian/hoodies">Hoodies/Sweatshirts</a>
                          </li>
                        </div>
                        <li class="list-group-item border-0">
                          <a class="nav-link text-black fw-bold d-block py-0" href="/wanita/pakaian">Lihat Semua
                            Pakaian</a>
                        </li>
                      </ul>
                    </div>
                    <!-- aksesoris(Wanita) -->
                    <div class="w-100 bg-white ps-3">
                      <ul class="list-group list-group-flush h-100 d-flex justify-content-between">
                        <div class="">
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link fw-bold text-black hover-line" style="letter-spacing: 2px"
                              href="/wanita/aksesoris">AKSESORIS</a>
                          </li>
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link text-black d-block py-0 hover-line" href="/wanita/aksesoris/tas">Tas</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="/wanita/aksesoris/topi">Topi &
                              Headband</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/aksesoris/sarung-tangan">Sarung Tangan & Deker</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/aksesoris/kaos-kaki">Kaos Kaki</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/aksesoris/aksesoris-lainnya">Aksesoris Lainnya</a>
                          </li>
                        </div>
                        <li class="list-group-item border-0 ">
                          <a class="nav-link text-black fw-bold d-block py-0" href="/wanita/aksesoris">Lihat Semua
                            Aksesoris</a>
                        </li>
                      </ul>
                    </div>
                    <!-- sport(Wanita) -->
                    <div class="w-100 bg-white ps-3">
                      <ul class="list-group list-group-flush h-100 d-flex justify-content-between">
                        <div class="">
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link fw-bold text-black hover-line" style="letter-spacing: 2px"
                              href="/wanita/sports">SPORTS</a>
                          </li>
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/sports/training">Training</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/sports/running">Running</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="/wanita/sports/golf">Golf</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="/wanita/sports/tenis">Tenis</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/sports/sepak-bola">Sepak
                              Bola</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/sports/basket">Basket</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/sports/outdoor">Outdoor</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/wanita/sports/renang">renang</a>
                            <a class="nav-link text-black fw-bold d-block py-0 hover-line"
                              href="/wanita/sports/sepeda">Sepeda</a>
                          </li>
                        </div>
                        <li class="list-group-item border-0">
                          <a class="nav-link text-black fw-bold d-block py-0" href="/wanita/sports">Lihat Semua
                            Sport</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </ul>
              </li>
              <!-- akhir wanita -->
              <!-- anak -->
              <li class="nav-item fs-s">
                <a class="nav-link fw-bolder text-black pb-3 pe-3" id="dropdown-navbar" href="/anak">
                  ANAK
                </a>
                <ul class="d-none position-absolute bg-white border-top w-100 start-0">
                  <!-- menu -->
                  <div class="d-flex pt-4 w-90 m-auto pb-2">
                    <!-- Anak (8-16) -->
                    <div class="w-100 bg-white ps-3">
                      <ul class="list-group list-group-flush h-100 d-flex justify-content-between">
                        <div class="">
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link fw-bold text-black hover-line" style="letter-spacing: 2px"
                              href="/anak/anak-8-16">ANAK
                              (8-16)</a>
                          </li>
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/anak/anak-8-16/new-arrivals">New Arrivals</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/anak/anak-8-16/pakaian-laki-laki">Pakaian Laki-Laki</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/anak/anak-8-16/pakaian-perempuan">Pakaian Perempuan</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/anak/anak-8-16/sepatu-laki-laki">Sepatu Laki-Laki</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/anak/anak-8-16/sepatu-perempuan">Sepatu Perempuan</a>
                          </li>
                        </div>
                        <li class="list-group-item border-0">
                          <a class="nav-link text-black fw-bold d-block mt-4 py-0" href="/anak/anak-8-16">Lihat Semua
                            Anak (8-16)</a>
                        </li>
                      </ul>
                    </div>
                    <!-- Anak(4-8) -->
                    <div class="w-100 bg-white ps-3">
                      <ul class="list-group list-group-flush h-100 d-flex justify-content-between">
                        <div class="">
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link fw-bold text-black hover-line" style="letter-spacing: 2px"
                              href="/anak/anak-4-8">ANAK
                              (4-8)</a>
                          </li>
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/anak/anak-4-8/new-arrivals">New
                              Arrivals</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/anak/anak-4-8/pakaian-laki-laki">Pakaian Laki-Laki</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/anak/anak-4-8/pakaian-perempuan">Pakaian Perempuan</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/anak/anak-4-8/sepatu-laki-laki">Sepatu Laki-Laki</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/anak/anak-4-8/sepatu-perempuan">Sepatu Perempuan</a>
                          </li>
                        </div>
                        <li class="list-group-item border-0">
                          <a class="nav-link text-black fw-bold d-block mt-7 py-0" href="anak/anak-4-8">Lihat Semua Anak
                            (4-8)</a>
                        </li>
                      </ul>
                    </div>
                    <!-- Balita (1-4) -->
                    <div class="w-100 bg-white ps-3">
                      <ul class="list-group list-group-flush h-100 d-flex justify-content-between">
                        <div class="">
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link fw-bold text-black hover-line" style="letter-spacing: 2px"
                              href="/anak/balita">BALITA
                              (1-4)</a>
                          </li>
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link text-black d-block py-0 hover-line" href="/anak/balita/new-arrivals">New
                              Arrivals</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/anak/balita/pakaian">Pakaian</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="/anak/balita/sepatu">Sepatu</a>
                          </li>
                        </div>
                        <li class="list-group-item border-0">
                          <a class="nav-link text-black fw-bold d-block mt-7 py-0" href="/anak/balita">Lihat Semua
                            Balita
                            (1-4)</a>
                        </li>
                      </ul>
                    </div>
                    <!-- Sports -->
                    <div class="w-100 bg-white ps-3">
                      <ul class="list-group list-group-flush h-100 d-flex justify-content-between">
                        <div class="">
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link fw-bold text-black hover-line" style="letter-spacing: 2px"
                              href="/anak/sports">SPORTS</a>
                          </li>
                          <li class="list-group-item border-0 py-0">
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/anak/sports/training">Training</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="/anak/sports/sepakbola">Sepak
                              Bola</a>
                            <a class="nav-link text-black d-block py-0 hover-line" href="/anak/sports/golf">Golf</a>
                            <a class="nav-link text-black d-block py-0 hover-line"
                              href="/anak/sports/running">Running</a>
                          </li>
                        </div>
                        <li class="list-group-item border-0">
                          <a class="nav-link text-black fw-bold d-block mt-7 py-0" href="/anak/sports">Lihat Semua
                            Sport</a>
                        </li>
                      </ul>
                    </div>
                    {{-- akhir sport --}}
                  </div>
                </ul>
              </li>
              <!-- akhir anak -->
            </ul>
          </div>
          <!-- search -->
          <form action="/search" method="GET" class="d-flex position-relative bg-grey mb-2 border-0" style="width: 26%">
            @csrf
            <input class="form-control rounded-0 border-0 bg-grey py-2 px-3 fs-vs " value="{{ request()->pencarian }}"
              name="pencarian" style="width: 100%" type="text" placeholder="Cari.." aria-label="Search" />
            <button class="border-0 bg-grey position-absolute end-0 h-100 px-2" type="submit">
              <ion-icon name="search-outline"></ion-icon>
            </button>
          </form>
          @auth
          <a href="/wishlist" class="nav-link mx-2">
            <ion-icon class="fs-4" name="heart-outline"></ion-icon>
          </a>
          <a href="/keranjang" class="nav-link me-4 ms-2">
            <ion-icon class="fs-4" name="bag-handle-outline"></ion-icon>
          </a>
          @endauth
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
  <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.js.map') }}"></script>
  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  @yield('script')

  <!-- ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>