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
        <a href="/" class="nav-link hover-black text-decoration-underline fs-vs fw-bold"
          style="letter-spacing: 2px;">KEMBALI</a>
        <a href="/{{ $produk->detailproduk->pengguna }}"
          class="fs-s ms-3 text-decoration-underline text-dark hover-black">{{
          $produk->detailproduk->pengguna
          }}/</a>
        <a href="/{{ $produk->detailproduk->jenis }}"
          class="fs-s ms-3 text-decoration-underline text-dark hover-black">{{ $produk->detailproduk->jenis
          }}/</a>
        <a href="/{{ $produk->detailproduk->kategori }}"
          class="fs-s ms-3 text-decoration-underline text-dark hover-black">{{
          $produk->detailproduk->kategori
          }}</a>
      </div>
      <div id="carouselExampleIndicators" style="background-color: #EDEFF0;" class="carousel slide">
        <div class="carousel-indicators">
          @php
          $i = 0;
          @endphp
          @foreach ($produk->gambar as $gambar)
          <img src="{{ asset('img/' . $gambar->gambar) }}" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="{{ $i }}" class="active border border-dark h-100 carousel-sepatu" aria-current="true"
            aria-label="Slide {{ $i+1 }}">
          </img>
          @php
          $i++;
          @endphp
          @endforeach
          {{-- <img src="{{ asset('img/' . $produk->gambar->gambar) }}" type="button"
            data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
            class="active border border-dark h-100 carousel-sepatu" aria-current="true" aria-label="Slide 1">
          </img>
          <img src="img/Produk1.2.jpeg" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            class="border border-dark h-100 carousel-sepatu" aria-label="Slide 2"></img>
          <img src="img/Produk1.2.jpeg" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            class="border border-dark h-100 carousel-sepatu" aria-label="Slide 3"></img> --}}
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('img/' . $produk->gambar[0]->gambar) }}" class="d-block w-50 m-auto" alt="...">
          </div>
          @foreach ($produk->gambar->slice(1) as $gambar)
          <div class="carousel-item">
            <img src="{{ asset('img/' . $gambar->gambar) }}" class="d-block w-50 m-auto" alt="...">
          </div>
          @endforeach
          {{-- <div class="carousel-item active">
            <img src="img/Produk1.1.jpeg" class="d-block w-50 m-auto" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Produk1.2.jpeg" class="d-block w-50 m-auto" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div> --}}
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
        <p class="fs-vvs text-center pt-2 m-0 fw-bold me-4" style="width: 60px;letter-spacing: 1px;">{{
          $jumlahWarna }} WARNA TERSEDIA
        </p>
        <div class="position-relative">
          <img src="{{ asset('img/'. $gambar_produk) }}" class="border-bottom border-3 border-dark" width="50px" alt="">
          <p class="position-absolute top-0 end-0 bg-black rounded-circle"
            style="margin-right: -5px;margin-top: -5px;width: 20px; height: 20px;">
            <ion-icon class="fs-5 text-white fw-bold" name="checkmark-outline" style="width: 20px;height: 20px;">
            </ion-icon>
          </p>
        </div>
        @foreach ($produk_lainnya as $produk_lain)
        <a href="/produk/{{ Str::slug($produk_lain->detailproduk->nama) }}/{{ $produk_lain->warna->warna }}">
          <img src={{ asset("img/". $produk_lain->gambar->first()->gambar) }} width="50px" alt="">
        </a>
        @endforeach
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
        <p class="fs-3 fw-bold mb-2">{{ $produk->detailproduk->nama }}</p>
        <p class="fst-italic fw-bolder mb-2">{{ $produk->detailproduk->deskripsi }}</p>
        <p class="fs-s">{{ $produk->detailproduk->subDeskripsi }}</p>
      </div>
      <!-- akhir deskripsi -->
      <!-- Deskripsi -->
      <div class="my-5 mx-5 px-5">
        <p class="fs-3 fw-bold mb-2">SPESIFIKASI</p>
        <ul class="w-100">
          {{$produk->detailproduk->spesifikasi}}
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
                @foreach ($produk_tawaran->slice(0,4) as $produk_sukai)
                <!-- Terbaik 1 carousel -->
                <a href="/produk/{{ Str::slug($produk_sukai->detailproduk->nama) }}/{{ $produk_sukai->warna->warna }}"
                  class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    @auth
                    @if($produk_sukai->wishlist != NULL)
                    @foreach ($produk_wishlist as $wishlist)
                    @if(auth()->user()->id == $wishlist->user_id && $produk_sukai->id == $wishlist->produk_id)
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
                        <input type="hidden" name="produk_id" id="produk_id" value="{{ $produk_sukai->id }}">
                        @endif
                        @else
                        <form action="/wishlist" method="POST">
                          @csrf
                          <input type="hidden" name="produk_id" id="produk_id" value="{{ $produk_sukai->id }}">
                          @endif
                          @endauth
                          <div class="">
                            <img src="{{ asset('img/'. $produk_sukai->gambar->first()->gambar) }}"
                              class="card-img-top rounded-0" alt="...">
                            <button type="submit" class="border-0 position-absolute start-100"
                              style="margin-left: -45px; margin-top: 17px;">
                              @auth
                              @if ($produk_sukai->wishlist != NULL)
                              @foreach ($produk_wishlist as $wishlist)
                              @if(auth()->user()->id == $wishlist->user_id && $produk_sukai->id == $wishlist->produk_id)
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
                          </div>
                        </form>
                        <div class="card-body px-2 py-0 d-flex flex-column justify-content-between"
                          style="height: auto;">
                          <p class="card-text mt-1 fs-vs text-muted">{{ $produk_sukai->detailproduk->pengguna }} {{
                            $produk_sukai->detailproduk->kategori }}</p>
                          <p class="card-text fs-vs text-uppercase" style="margin-top: -7px;">{{
                            $produk_sukai->detailproduk->nama
                            }}
                          </p>
                          <p class="card-text fs-vs" style="margin-top: -10px;">Rp. {{
                            number_format($produk_sukai->detailproduk->harga
                            , 0, ',', '.')}}</p>
                        </div>
                  </div>
                </a>
                <!-- akhir Terbaik 1 carousel -->
                @endforeach
              </div>
            </div>
            <!-- akhir halaman 1 -->

            <!-- halaman 2 -->
            <div class="carousel-item bg-white">
              <div class="d-flex gap-2 m-auto w-100">
                @foreach ($produk_tawaran->slice(4,4) as $produk_sukai)
                <!-- Terbaik 1 carousel -->
                <a href="/produk/{{ Str::slug($produk_sukai->detailproduk->nama) }}/{{ $produk_sukai->warna->warna }}"
                  class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    @auth
                    @if($produk_sukai->wishlist != NULL)
                    @foreach ($produk_wishlist as $wishlist)
                    @if(auth()->user()->id == $wishlist->user_id && $produk_sukai->id == $wishlist->produk_id)
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
                        <input type="hidden" name="produk_id" id="produk_id" value="{{ $produk_sukai->id }}">
                        @endif
                        @else
                        <form action="/wishlist" method="POST">
                          @csrf
                          <input type="hidden" name="produk_id" id="produk_id" value="{{ $produk_sukai->id }}">
                          @endif
                          @endauth
                          <div class="">
                            <img src="{{ asset('img/'. $produk_sukai->gambar->first()->gambar) }}"
                              class="card-img-top rounded-0" alt="...">
                            <button type="submit" class="border-0 position-absolute start-100"
                              style="margin-left: -45px; margin-top: 17px;">
                              @auth
                              @if ($produk_sukai->wishlist != NULL)
                              @foreach ($produk_wishlist as $wishlist)
                              @if(auth()->user()->id == $wishlist->user_id && $produk_sukai->id == $wishlist->produk_id)
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
                          </div>
                        </form>
                        <div class="card-body px-2 py-0 d-flex flex-column justify-content-between"
                          style="height: auto;">
                          <p class="card-text mt-1 fs-vs text-muted">{{ $produk_sukai->detailproduk->pengguna }} {{
                            $produk_sukai->detailproduk->kategori }}</p>
                          <p class="card-text fs-vs text-uppercase" style="margin-top: -7px;">{{
                            $produk_sukai->detailproduk->nama
                            }}
                          </p>
                          <p class="card-text fs-vs" style="margin-top: -10px;">Rp. {{
                            number_format($produk_sukai->detailproduk->harga
                            , 0, ',', '.')}}</p>
                        </div>
                  </div>
                </a>
                <!-- akhir Terbaik 1 carousel -->
                @endforeach
              </div>
            </div>
            <!-- akhir halaman 2 -->

            <!-- halaman 3 -->
            <div class="carousel-item bg-white">
              <div class="d-flex gap-2 m-auto w-100">
                @foreach ($produk_tawaran->slice(8,4) as $produk_sukai)
                <!-- Terbaik 1 carousel -->
                <a href="/produk/{{ Str::slug($produk_sukai->detailproduk->nama) }}/{{ $produk_sukai->warna->warna }}"
                  class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    @auth
                    @if($produk_sukai->wishlist != NULL)
                    @foreach ($produk_wishlist as $wishlist)
                    @if(auth()->user()->id == $wishlist->user_id && $produk_sukai->id == $wishlist->produk_id)
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
                        <input type="hidden" name="produk_id" id="produk_id" value="{{ $produk_sukai->id }}">
                        @endif
                        @else
                        <form action="/wishlist" method="POST">
                          @csrf
                          <input type="hidden" name="produk_id" id="produk_id" value="{{ $produk_sukai->id }}">
                          @endif
                          @endauth
                          <div class="">
                            <img src="{{ asset('img/'. $produk_sukai->gambar->first()->gambar) }}"
                              class="card-img-top rounded-0" alt="...">
                            <button type="submit" class="border-0 position-absolute start-100"
                              style="margin-left: -45px; margin-top: 17px;">
                              @auth
                              @if ($produk_sukai->wishlist != NULL)
                              @foreach ($produk_wishlist as $wishlist)
                              @if(auth()->user()->id == $wishlist->user_id && $produk_sukai->id == $wishlist->produk_id)
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
                          </div>
                        </form>
                        <div class="card-body px-2 py-0 d-flex flex-column justify-content-between"
                          style="height: auto;">
                          <p class="card-text mt-1 fs-vs text-muted">{{ $produk_sukai->detailproduk->pengguna }} {{
                            $produk_sukai->detailproduk->kategori }}</p>
                          <p class="card-text fs-vs text-uppercase" style="margin-top: -7px;">{{
                            $produk_sukai->detailproduk->nama
                            }}
                          </p>
                          <p class="card-text fs-vs" style="margin-top: -10px;">Rp. {{
                            number_format($produk_sukai->detailproduk->harga
                            , 0, ',', '.')}}</p>
                        </div>
                  </div>
                </a>
                <!-- akhir Terbaik 1 carousel -->
                @endforeach
              </div>
            </div>
            <!-- akhir halaman 3 -->

            <!-- halaman 4 -->
            <div class="carousel-item bg-white">
              <div class="d-flex gap-2 m-auto w-100">
                @foreach ($produk_tawaran->slice(12,4) as $produk_sukai)
                <!-- Terbaik 1 carousel -->
                <a href="/produk/{{ Str::slug($produk_sukai->detailproduk->nama) }}/{{ $produk_sukai->warna->warna }}"
                  class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    @auth
                    @if($produk_sukai->wishlist != NULL)
                    @foreach ($produk_wishlist as $wishlist)
                    @if(auth()->user()->id == $wishlist->user_id && $produk_sukai->id == $wishlist->produk_id)
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
                        <input type="hidden" name="produk_id" id="produk_id" value="{{ $produk_sukai->id }}">
                        @endif
                        @else
                        <form action="/wishlist" method="POST">
                          @csrf
                          <input type="hidden" name="produk_id" id="produk_id" value="{{ $produk_sukai->id }}">
                          @endif
                          @endauth
                          <div class="">
                            <img src="{{ asset('img/'. $produk_sukai->gambar->first()->gambar) }}"
                              class="card-img-top rounded-0" alt="...">
                            <button type="submit" class="border-0 position-absolute start-100"
                              style="margin-left: -45px; margin-top: 17px;">
                              @auth
                              @if ($produk_sukai->wishlist != NULL)
                              @foreach ($produk_wishlist as $wishlist)
                              @if(auth()->user()->id == $wishlist->user_id && $produk_sukai->id == $wishlist->produk_id)
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
                          </div>
                        </form>
                        <div class="card-body px-2 py-0 d-flex flex-column justify-content-between"
                          style="height: auto;">
                          <p class="card-text mt-1 fs-vs text-muted">{{ $produk_sukai->detailproduk->pengguna }} {{
                            $produk_sukai->detailproduk->kategori }}</p>
                          <p class="card-text fs-vs text-uppercase" style="margin-top: -7px;">{{
                            $produk_sukai->detailproduk->nama
                            }}
                          </p>
                          <p class="card-text fs-vs" style="margin-top: -10px;">Rp. {{
                            number_format($produk_sukai->detailproduk->harga
                            , 0, ',', '.')}}</p>
                        </div>
                  </div>
                </a>
                <!-- akhir Terbaik 1 carousel -->
                @endforeach
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
                @foreach ($pelanggan_lain_membeli->slice(0,4) as $pelanggan_lain)
                <!-- Terbaik 1 carousel -->
                <a href="/produk/{{ Str::slug($pelanggan_lain->detailproduk->nama) }}/{{ $pelanggan_lain->warna->warna }}"
                  class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    @auth
                    @if($pelanggan_lain->wishlist != NULL)
                    @foreach ($produk_wishlist as $wishlist)
                    @if(auth()->user()->id == $wishlist->user_id && $pelanggan_lain->id == $wishlist->produk_id)
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
                        <input type="hidden" name="produk_id" id="produk_id" value="{{ $pelanggan_lain->id }}">
                        @endif
                        @else
                        <form action="/wishlist" method="POST">
                          @csrf
                          <input type="hidden" name="produk_id" id="produk_id" value="{{ $pelanggan_lain->id }}">
                          @endif
                          @endauth
                          <div class="">
                            <img src="{{ asset('img/'. $pelanggan_lain->gambar->first()->gambar) }}"
                              class="card-img-top rounded-0" alt="...">
                            <button type="submit" class="border-0 position-absolute start-100"
                              style="margin-left: -45px; margin-top: 17px;">
                              @auth
                              @if ($pelanggan_lain->wishlist != NULL)
                              @foreach ($produk_wishlist as $wishlist)
                              @if(auth()->user()->id == $wishlist->user_id && $pelanggan_lain->id ==
                              $wishlist->produk_id)
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
                          </div>
                        </form>
                        <div class="card-body px-2 py-0 d-flex flex-column justify-content-between"
                          style="height: auto;">
                          <p class="card-text mt-1 fs-vs text-muted">{{ $pelanggan_lain->detailproduk->pengguna }} {{
                            $pelanggan_lain->detailproduk->kategori }}</p>
                          <p class="card-text fs-vs text-uppercase" style="margin-top: -7px;">{{
                            $pelanggan_lain->detailproduk->nama
                            }}
                          </p>
                          <p class="card-text fs-vs" style="margin-top: -10px;">Rp. {{
                            number_format($pelanggan_lain->detailproduk->harga
                            , 0, ',', '.')}}</p>
                        </div>
                  </div>
                </a>
                <!-- akhir Terbaik 1 carousel -->
                @endforeach
              </div>
            </div>
            <!-- akhir halaman 1 -->

            <!-- halaman 2 -->
            <div class="carousel-item bg-white">
              <div class="d-flex gap-2 m-auto w-100">
                @foreach ($pelanggan_lain_membeli->slice(4,4) as $pelanggan_lain)
                <!-- Terbaik 1 carousel -->
                <a href="/produk/{{ Str::slug($pelanggan_lain->detailproduk->nama) }}/{{ $pelanggan_lain->warna->warna }}"
                  class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    @auth
                    @if($pelanggan_lain->wishlist != NULL)
                    @foreach ($produk_wishlist as $wishlist)
                    @if(auth()->user()->id == $wishlist->user_id && $pelanggan_lain->id == $wishlist->produk_id)
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
                        <input type="hidden" name="produk_id" id="produk_id" value="{{ $pelanggan_lain->id }}">
                        @endif
                        @else
                        <form action="/wishlist" method="POST">
                          @csrf
                          <input type="hidden" name="produk_id" id="produk_id" value="{{ $pelanggan_lain->id }}">
                          @endif
                          @endauth
                          <div class="">
                            <img src="{{ asset('img/'. $pelanggan_lain->gambar->first()->gambar) }}"
                              class="card-img-top rounded-0" alt="...">
                            <button type="submit" class="border-0 position-absolute start-100"
                              style="margin-left: -45px; margin-top: 17px;">
                              @auth
                              @if ($pelanggan_lain->wishlist != NULL)
                              @foreach ($produk_wishlist as $wishlist)
                              @if(auth()->user()->id == $wishlist->user_id && $pelanggan_lain->id ==
                              $wishlist->produk_id)
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
                          </div>
                        </form>
                        <div class="card-body px-2 py-0 d-flex flex-column justify-content-between"
                          style="height: auto;">
                          <p class="card-text mt-1 fs-vs text-muted">{{ $pelanggan_lain->detailproduk->pengguna }} {{
                            $pelanggan_lain->detailproduk->kategori }}</p>
                          <p class="card-text fs-vs text-uppercase" style="margin-top: -7px;">{{
                            $pelanggan_lain->detailproduk->nama
                            }}
                          </p>
                          <p class="card-text fs-vs" style="margin-top: -10px;">Rp. {{
                            number_format($pelanggan_lain->detailproduk->harga
                            , 0, ',', '.')}}</p>
                        </div>
                  </div>
                </a>
                <!-- akhir Terbaik 1 carousel -->
                @endforeach
              </div>
            </div>
            <!-- akhir halaman 2 -->

            <!-- halaman 3 -->
            <div class="carousel-item bg-white">
              <div class="d-flex gap-2 m-auto w-100">
                @foreach ($pelanggan_lain_membeli->slice(8,4) as $pelanggan_lain)
                <!-- Terbaik 1 carousel -->
                <a href="/produk/{{ Str::slug($pelanggan_lain->detailproduk->nama) }}/{{ $pelanggan_lain->warna->warna }}"
                  class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    @auth
                    @if($pelanggan_lain->wishlist != NULL)
                    @foreach ($produk_wishlist as $wishlist)
                    @if(auth()->user()->id == $wishlist->user_id && $pelanggan_lain->id == $wishlist->produk_id)
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
                        <input type="hidden" name="produk_id" id="produk_id" value="{{ $pelanggan_lain->id }}">
                        @endif
                        @else
                        <form action="/wishlist" method="POST">
                          @csrf
                          <input type="hidden" name="produk_id" id="produk_id" value="{{ $pelanggan_lain->id }}">
                          @endif
                          @endauth
                          <div class="">
                            <img src="{{ asset('img/'. $pelanggan_lain->gambar->first()->gambar) }}"
                              class="card-img-top rounded-0" alt="...">
                            <button type="submit" class="border-0 position-absolute start-100"
                              style="margin-left: -45px; margin-top: 17px;">
                              @auth
                              @if ($pelanggan_lain->wishlist != NULL)
                              @foreach ($produk_wishlist as $wishlist)
                              @if(auth()->user()->id == $wishlist->user_id && $pelanggan_lain->id ==
                              $wishlist->produk_id)
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
                          </div>
                        </form>
                        <div class="card-body px-2 py-0 d-flex flex-column justify-content-between"
                          style="height: auto;">
                          <p class="card-text mt-1 fs-vs text-muted">{{ $pelanggan_lain->detailproduk->pengguna }} {{
                            $pelanggan_lain->detailproduk->kategori }}</p>
                          <p class="card-text fs-vs text-uppercase" style="margin-top: -7px;">{{
                            $pelanggan_lain->detailproduk->nama
                            }}
                          </p>
                          <p class="card-text fs-vs" style="margin-top: -10px;">Rp. {{
                            number_format($pelanggan_lain->detailproduk->harga
                            , 0, ',', '.')}}</p>
                        </div>
                  </div>
                </a>
                <!-- akhir Terbaik 1 carousel -->
                @endforeach
              </div>
            </div>
            <!-- akhir halaman 3 -->

            <!-- halaman 4 -->
            <div class="carousel-item bg-white">
              <div class="d-flex gap-2 m-auto w-100">
                @foreach ($pelanggan_lain_membeli->slice(12,4) as $pelanggan_lain)
                <!-- Terbaik 1 carousel -->
                <a href="/produk/{{ Str::slug($pelanggan_lain->detailproduk->nama) }}/{{ $pelanggan_lain->warna->warna }}"
                  class="text-black nav-link hover-border">
                  <div class="card border-0" style="width: 13rem;">
                    @auth
                    @if($pelanggan_lain->wishlist != NULL)
                    @foreach ($produk_wishlist as $wishlist)
                    @if(auth()->user()->id == $wishlist->user_id && $pelanggan_lain->id == $wishlist->produk_id)
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
                        <input type="hidden" name="produk_id" id="produk_id" value="{{ $pelanggan_lain->id }}">
                        @endif
                        @else
                        <form action="/wishlist" method="POST">
                          @csrf
                          <input type="hidden" name="produk_id" id="produk_id" value="{{ $pelanggan_lain->id }}">
                          @endif
                          @endauth
                          <div class="">
                            <img src="{{ asset('img/'. $pelanggan_lain->gambar->first()->gambar) }}"
                              class="card-img-top rounded-0" alt="...">
                            <button type="submit" class="border-0 position-absolute start-100"
                              style="margin-left: -45px; margin-top: 17px;">
                              @auth
                              @if ($pelanggan_lain->wishlist != NULL)
                              @foreach ($produk_wishlist as $wishlist)
                              @if(auth()->user()->id == $wishlist->user_id && $pelanggan_lain->id ==
                              $wishlist->produk_id)
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
                          </div>
                        </form>
                        <div class="card-body px-2 py-0 d-flex flex-column justify-content-between"
                          style="height: auto;">
                          <p class="card-text mt-1 fs-vs text-muted">{{ $pelanggan_lain->detailproduk->pengguna }} {{
                            $pelanggan_lain->detailproduk->kategori }}</p>
                          <p class="card-text fs-vs text-uppercase" style="margin-top: -7px;">{{
                            $pelanggan_lain->detailproduk->nama
                            }}
                          </p>
                          <p class="card-text fs-vs" style="margin-top: -10px;">Rp. {{
                            number_format($pelanggan_lain->detailproduk->harga
                            , 0, ',', '.')}}</p>
                        </div>
                  </div>
                </a>
                <!-- akhir Terbaik 1 carousel -->
                @endforeach
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
        @auth
        @else
        <p class="fs-4 fw-bold mb-2">Silakan masuk untuk menulis ulasan</p>
        <p class="fs-vs">Hanya pengguna terdaftar yang dapat menulis ulasan, Silakan <a href="/login"
            class="text-black hover-black">masuk</a> atau <a href="/registrasi"
            class="text-black hover-black">registrasi</a></p>
        @endauth

        @if (session()->has('success'))
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
          <strong>{{ session('success') }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @error('quality')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{ $message }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror
        @error('value')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{ $message }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror
        @error('price')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{ $message }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror
        @error('namaDepan')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{ $message }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror
        @error('judulUlasan')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{ $message }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror
        @error('ulasan')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{ $message }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror

        <p class="fs-3 fw-bold mb-2">JADILAH YANG PERTAMA MENGULAS PRODUK INI</p>
        <!-- Button trigger modal -->
        <button id="ulasan" type="button" class="button-60 mt-3 m-auto" data-bs-toggle="modal"
          data-bs-target="#staticBackdrop">
          Tulis ulasan pertama
        </button>

        @auth
        <!-- Modal -->
        <form action="/ulasan" method="POST">
          @csrf
          <input type="hidden" name="produk_id" value="{{ $produk->id }}">
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
                      <label class="form-check-label" for="quality5">
                        5
                      </label>
                      <input class="form-check-input" value="5" type="radio" name="quality" id="quality5">
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" value="4" type="radio" name="quality" id="quality4">
                      <label class="form-check-label" for="quality4">
                        4
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" value="3" type="radio" name="quality" id="quality3">
                      <label class="form-check-label" for="quality3">
                        3
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" value="2" type="radio" name="quality" id="quality2">
                      <label class="form-check-label" for="quality2">
                        2
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" value="1" type="radio" name="quality" id="quality1">
                      <label class="form-check-label" for="quality1">
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
                      <label class="form-check-label" for="value5">
                        5
                      </label>
                      <input class="form-check-input" value="5" type="radio" name="value" id="value5">
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" value="4" type="radio" name="value" id="value4">
                      <label class=" form-check-label" for="value4">
                        4
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" value="3" type="radio" name="value" id="value3">
                      <label class=" form-check-label" for="value3">
                        3
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" value="2" type="radio" name="value" id="value2">
                      <label class=" form-check-label" for="value2">
                        2
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" value="1" type="radio" name="value" id="value1">
                      <label class="form-check-label" for="value1">
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
                      <label class="form-check-label" for="price5">
                        5
                      </label>
                      <input class="form-check-input" value="5" type="radio" name="price" id="price5">
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" value="4" type="radio" name="price" id="price4">
                      <label class="form-check-label" for="price4">
                        4
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" value="3" type="radio" name="price" id="price3">
                      <label class="form-check-label" for="price3">
                        3
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" value="2" type="radio" name="price" id="price2">
                      <label class="form-check-label" for="price2">
                        2
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" value="1" type="radio" name="price" id="price1">
                      <label class="form-check-label" for="price1">
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
                    <input type="text" name="namaDepan" class="form-control" id="namaDepan"
                      placeholder="name@example.com">
                    <label for="namaDepan">Nama Depan</label>
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
                  <button type="submit" class="bg-black text-white py-2">Kirim Ulasan ---></button>
                </div>
              </div>
            </div>
          </div>
        </form>
        @endauth

        @foreach ($ulasans as $ulasan)
        @if($ulasan->is_verif == 1)
        <div class="mt-3 border-top border-bottom border-3">
          <div class="d-flex p-3">
            <div class="me-5 mt-2">
              <span class="fw-bold me-4">Quality</span>
              @for ($i = 0; $i < $ulasan->quality; $i++)
                <ion-icon name="star"></ion-icon>
                @endfor
            </div>
            <div class="w-72">
              <div class="d-flex justify-content-between w-100">
                <p class="fw-bold fs-4 text-uppercase">{{ $ulasan->judulUlasan }}</p>
                <p class=" align-self-center">{{ $ulasan->created_at }}</p>
              </div>
              <p>{{ $ulasan->ulasan }}</p>
              <p class="fw-bold fs-vs">-{{ $ulasan->namaDepan }}</p>
            </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
      <!-- akhir ulasan -->
    </div>
    <!-- akhir gambar, deskripsi,dll -->

    <!-- harga -->
    <div class="w-100 px-5 py-4 vh-100" id="tampilanKanan">
      <!-- kategori dan beri ulasan -->
      <div class="d-flex justify-content-between">
        <div class="d-flex">
          <p class="fs-vs">{{ $produk->detailproduk->jenis }} &bull;</p>
          <p class="fs-vs">{{ $produk->detailproduk->kategori }} &bull;</p>
        </div>
        <a href="#ulasan" class="fs-vs text-black hover-black">Tulis Ulasan</a>
      </div>
      <!-- akhir kategori dan beri ulasan -->

      <!-- merek -->
      <p class="fs-2 fw-bold fst-italic">{{ $produk->detailproduk->nama }}</p>
      <p class="fs-vs text-uppercase">{{ $produk->deskripsiWarna }}</p>
      <p class="fs-vs fw-bold">Rp. {{
        number_format($produk->detailproduk->harga
        , 0, ',', '.')}}</p>
      <!-- akhir merek -->

      <!-- ukuran -->
      <p class="fs-vvs fw-bold" style="letter-spacing: 3px;">PILIH SIZE</p>
      <div class="d-flex">
        <select class="form-select bg-white border-1 border-dark rounded-0 w-auto fw-bold fs-vs"
          aria-label="Default select example">
          <option selected>UKURAN</option>
          @foreach ($ukurans as $ukuran)
          <option value="{{ $ukuran }}">{{ $ukuran }}</option>
          @endforeach
        </select>
      </div>
      <p class="text-danger fw-bold fs-vs my-2">{{ $produk->stock }} stok tersisa</p>
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
<script src="{{ asset('js/produks.js') }}"></script>
@endsection