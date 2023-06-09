@extends('layouts.layoutIndex');

@section('main')
<div class="position-relative mt-5">
  <!-- hero image -->
  <!-- hero image1 -->
  <div class="position-relative" style="z-index: 2;">
    <img src="img/Hero1.jpeg" class="img-fluid mb-2" width="100%" height="100%" alt="...">
    <div class="position-absolute top-50 start-10">
      <h1 class="text-white">HOME OF CLASSICS</h1>
      <h6 class="text-white">Celebrate timeless classics with Blackpink</h6>
      <button class="button-52 mt-3" role="button">SHOP NP</button>
    </div>
  </div>
  <!-- akhir hero image1 -->
  <!-- hero image2 -->
  <div class="position-relative" style="z-index: 2;">
    <img src="img/Hero2.jpeg" class="img-fluid mb-2" width="100%" height="100%" alt="...">
    <div class="position-absolute top-50 start-10">
      <h6 class="text-white">Bersiap untuk Hari Raya dengan style baru</h6>
      <h6 class="text-white">yang cerah dan berkarakter</h6>
      <button class="button-53 mt-3" role="button">BELI SEKARANG --></button>
    </div>
  </div>
  <!-- akhir hero image2 -->
  <!-- carousel card -->
  <div class="container p-3">
    <h2 class="ps-4 fw-bold">WHAT'S HOT</h2>
    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide px-4">
      <!-- indikator carousel -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-dark"
          id="first" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" class="bg-dark" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" id="last" data-bs-target="#carouselExampleIndicators" class="bg-dark" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <!-- akhir indikator carousel -->
      <!-- isi carousel -->
      <div class="carousel-inner pb-6">
        <!-- halaman 1 -->
        <div class="carousel-item active">
          <div class="d-flex gap-2 bg-white">

            <!-- card 1 carousel -->
            <div class="card border-0" style="width: 16rem;">
              <a href="#" class="text-black nav-link">
                <img src="img/Carousel1.jpg" class="card-img-top rounded-0" alt="...">
                <div class="card-body p-0 d-flex flex-column justify-content-between" style="height: 150px;">
                  <p class="card-text mt-3">Get Raya-ready with new outfits!</p>
              </a>
              <a href="#" class="text-black fs-vs fw-bold d-block text-decoration-underline "
                style="letter-spacing: 2px; width: 90px;">SHOP NOW</a>
            </div>
          </div>
          <!-- akhir card 1 carousel -->

          <!-- card 2 carousel -->
          <div class="card border-0" style="width: 16rem;">
            <a href="#" class="text-black nav-link">
              <img src="img/Carousel2.jpeg" class="card-img-top rounded-0" alt="...">
              <div class="card-body p-0 d-flex flex-column justify-content-between" style="height: 150px;">
                <p class="card-text mt-3"><span class="fw-bold d-block">Dress like a champion</span> Made for fans.
                  Celebrate victory with Argentina's latest home jersey.</p>
            </a>
            <a href="#" class="text-black fs-vs fw-bold d-block text-decoration-underline hover-black"
              style="letter-spacing: 2px; width: 90px;">SHOP NOW</a>
          </div>
        </div>
        <!-- akhir card 2 carousel -->

        <!-- card 3 carousel -->
        <div class="card border-0" style="width: 16rem;">
          <a href="#" class="text-black nav-link">
            <img src="img/Carousel3.jpeg" class="card-img-top rounded-0" alt="...">
            <div class="card-body p-0 d-flex flex-column justify-content-between" style="height: 150px;">
              <p class="card-text mt-3"><span class="fw-bold d-block">Marathon winner</span> 02:16:28_Rosemary
                Wanjiru_ADIZERO ADIOS PRO 3.</p>
          </a>
          <a href="#" class="text-black fs-vs fw-bold d-block text-decoration-underline hover-black"
            style="letter-spacing: 2px; width: 90px;">SHOP NOW</a>
        </div>
      </div>
      <!-- akhir card 3 carousel -->

      <!-- card 4 carousel -->
      <div class="card border-0" style="width: 16rem;">
        <a href="#" class="text-black nav-link">
          <img src="img/Carousel4.jpeg" class="card-img-top rounded-0" alt="...">
          <div class="card-body p-0 d-flex flex-column justify-content-between" style="height: 150px;">
            <p class="card-text mt-3"><span class="fw-bold d-block">Samba OG. Legacy Redefined.</span>
              Timeless icon from stadium to street.</p>
        </a>
        <a href="#" class="text-black fs-vs fw-bold d-block text-decoration-underline hover-black"
          style="letter-spacing: 2px; width: 90px;">SHOP NOW</a>
      </div>
    </div>
    <!-- akhir card 4 carousel -->

    <!-- card 5 carousel -->
    <div class="card border-0" style="width: 16rem;">
      <a href="#" class="text-black nav-link">
        <img src="img/Carousel5.jpg" class="card-img-top rounded-0" alt="...">
        <div class="card-body p-0 d-flex flex-column" style="height: 160px;">
          <p class="card-text mt-3"><span class="fw-bold d-block">The ongoing journey</span>TERREX SOULSTRIDE FLOW:
            Discover the effortless feeling which empowers you to run farther.
      </a>
      <a href="#" class="text-black fs-vs fw-bold d-block text-decoration-underline "
        style="letter-spacing: 2px; width: 90px;">SHOP NOW</a></p>
    </div>
  </div>
  <!-- akhir card 5 carousel -->
</div>
</div>
<!-- akhir halaman 1 -->
<!-- halaman 2 -->
<div class="carousel-item bg-white">
  <div class="d-flex gap-2">
    <!-- card 5 carousel -->
    <div class="card border-0" style="width: 16rem;">
      <a href="#" class="text-black nav-link">
        <img src="img/Carousel5.jpg" class="card-img-top rounded-0" alt="...">
        <div class="card-body p-0 d-flex flex-column" style="height: 160px;">
          <p class="card-text mt-3">
            < class="fw-bold d-block">The ongoing journey</ span>TERREX SOULSTRIDE FLOW: Discover the effortless feeling
            which empowers you to run farther.
      </a>
      <a href="#" class="text-black fs-vs fw-bold d-block text-decoration-underline hover-black"
        style="letter-spacing: 2px; width: 90px;">SHOP NOW</a></p>
    </div>
  </div>
  <!-- akhir card 5 carousel -->
  <!-- card 6 carousel -->
  <div class="card border-0" style="width: 16rem;">
    <a href="#" class="text-black nav-link">
      <img src="img/Carousel6.jpeg" class="card-img-top rounded-0" alt="...">
      <div class="card-body p-0 d-flex flex-column justify-content-between" style="height: 160px;">
        <p class="card-text mt-3"><span class="fw-bold d-block">Solarboost 5</span>Your new go-to shoe for everyday
          running.</p>
    </a>
    <a href="#" class="text-black fs-vs fw-bold d-block text-decoration-underline hover-black"
      style="letter-spacing: 2px; width: 90px;">SHOP NOW</a>
  </div>
</div>
<!-- akhir card 6 carousel -->
<!-- card 7 carousel -->
<div class="card border-0" style="width: 16rem;">
  <a href="#" class="text-black nav-link">
    <img src="img/Carousel7.jpeg" class="card-img-top rounded-0" alt="...">
    <div class="card-body p-0 d-flex flex-column justify-content-between" style="height: 160px;">
      <p class="card-text mt-3"><span class="fw-bold d-block">Iconic feels. Refined.</span>
        Step up your street style in Ultraboost. Crafted for maximum comfort.</p>
  </a>
  <a href="#" class="text-black fs-vs fw-bold d-block text-decoration-underline hover-black"
    style="letter-spacing: 2px; width: 90px;">SHOP NOW</a>
</div>
</div>
<!-- akhir card 7 carousel -->
<!-- card 8 carousel -->
<div class="card border-0" style="width: 16rem;">
  <a href="#" class="text-black nav-link">
    <img src="img/Carousel8.jpeg" class="card-img-top rounded-0" alt="...">
    <div class="card-body p-0 d-flex flex-column justify-content-between" style="height: 160px;">
      <p class="card-text mt-3"><span class="fw-bold d-block">IMAGINE YOUR WORLD</span>
        Enjoy every moment with the new adidas LEGO® collection. Made for play.</p>
  </a>
  <a href="#" class="text-black fs-vs fw-bold d-block text-decoration-underline hover-black"
    style="letter-spacing: 2px; width: 90px;">SHOP NOW</a>
</div>
</div>
<!-- akhir card 8 carousel -->
<!-- card 9 carousel -->
<div class="card border-0" style="width: 16rem;">
  <a href="#" class="text-black nav-link">
    <img src="img/Carousel9.jpeg" class="card-img-top rounded-0" alt="...">
    <div class="card-body p-0 d-flex flex-column justify-content-between" style="height: 160px;">
      <p class="card-text mt-3"><span class="fw-bold d-block">Always Original</span>
        Heads up, Always Original. A collection of timeless styles for those that stay true.</p>
  </a>
  <a href="#" class="text-black fs-vs fw-bold d-block text-decoration-underline hover-black"
    style="letter-spacing: 2px; width: 90px;">SHOP NOW</a>
</div>
</div>
<!-- akhir card 9 carousel -->
</div>
</div>
<!-- akhir halaman 2 -->
<!-- halaman 3 -->
<div class="carousel-item bg-white">
  <div class="d-flex gap-2">
    <!-- card 6 carousel -->
    <div class="card border-0" style="width: 16rem;">
      <a href="#" class="text-black nav-link">
        <img src="img/Carousel6.jpeg" class="card-img-top rounded-0" alt="...">
        <div class="card-body p-0 d-flex flex-column justify-content-between" style="height: 160px;">
          <p class="card-text mt-3"><span class="fw-bold d-block">Solarboost 5</span>Your new go-to shoe for everyday
            running.</p>
      </a>
      <a href="#" class="text-black fs-vs fw-bold d-block text-decoration-underline hover-black"
        style="letter-spacing: 2px; width: 90px;">SHOP NOW</a>
    </div>
  </div>
  <!-- akhir card 6 carousel -->

  <!-- card 7 carousel -->
  <div class="card border-0" style="width: 16rem;">
    <a href="#" class="text-black nav-link">
      <img src="img/Carousel7.jpeg" class="card-img-top rounded-0" alt="...">
      <div class="card-body p-0 d-flex flex-column justify-content-between" style="height: 160px;">
        <p class="card-text mt-3"><span class="fw-bold d-block">Iconic feels. Refined.</span>
          Step up your street style in Ultraboost. Crafted for maximum comfort.</p>
    </a>
    <a href="#" class="text-black fs-vs fw-bold d-block text-decoration-underline hover-black"
      style="letter-spacing: 2px; width: 90px;">SHOP NOW</a>
  </div>
</div>
<!-- akhir card 7 carousel -->

<!-- card 8 carousel -->
<div class="card border-0" style="width: 16rem;">
  <a href="#" class="text-black nav-link">
    <img src="img/Carousel8.jpeg" class="card-img-top rounded-0" alt="...">
    <div class="card-body p-0 d-flex flex-column justify-content-between" style="height: 160px;">
      <p class="card-text mt-3"><span class="fw-bold d-block">IMAGINE YOUR WORLD</span>
        Enjoy every moment with the new adidas LEGO® collection. Made for play.</p>
  </a>
  <a href="#" class="text-black fs-vs fw-bold d-block text-decoration-underline "
    style="letter-spacing: 2px; width: 90px;">SHOP NOW</a>
</div>
</div>
<!-- akhir card 8 carousel -->

<!-- card 9 carousel -->
<div class="card border-0" style="width: 16rem;">
  <a href="#" class="text-black nav-link">
    <img src="img/Carousel9.jpeg" class="card-img-top rounded-0" alt="...">
    <div class="card-body p-0 d-flex flex-column justify-content-between" style="height: 160px;">
      <p class="card-text mt-3"><span class="fw-bold d-block">Always Original</span>
        Heads up, Always Original. A collection of timeless styles for those that stay true.</p>
  </a>
  <a href="#" class="text-black fs-vs fw-bold d-block text-decoration-underline hover-black"
    style="letter-spacing: 2px; width: 90px;">SHOP NOW</a>
</div>
</div>
<!-- akhir card 9 carousel -->

<!-- card 10 carousel -->
<div class="card border-0" style="width: 16rem;">
  <a href="#" class="text-black nav-link">
    <img src="img/Carousel10.jpeg" class="card-img-top rounded-0" alt="...">
    <div class="card-body p-0 d-flex flex-column justify-content-between" style="height: 160px;">
      <p class="card-text mt-3"><span class="fw-bold d-block">adidas x Marimekko</span>
        Celebrating self-expression through movement and iconic prints.</p>
  </a>
  <a href="#" class="text-black fs-vs fw-bold d-block text-decoration-underline hover-black"
    style="letter-spacing: 2px; width: 90px;">SHOP NOW</a>
</div>
</div>
<!-- akhir card 10 carousel -->
</div>
</div>
<!-- akhir halaman 3 -->
</div>
<!-- tombol balek -->
<button id="back"
  class="carousel-control-prev opacity-100 ms-4 top-40 border-2 border-dark bg-white border text-black hover-black"
  style="width: 50px; height: 50px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
  <span aria-hidden="true">
    <ion-icon name="chevron-back-outline"></ion-icon>
  </span>
  <span class="visually-hidden">Previous</span>
</button>
<!-- akhir tombol balek -->
<!-- tombol selanjutnya -->
<button id="next"
  class="carousel-control-next opacity-100 ms-4 top-40 me-4 border-2 border-dark bg-white border text-black hover-black"
  style="width: 50px; height: 50px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
  <span aria-hidden="true">
    <ion-icon name="chevron-forward-outline"></ion-icon>
  </span>
  <span class="visually-hidden">Next</span>
</button>
<!-- akhir tombol selanjutnya -->
</div>
<!-- akhir carousel -->
</div>
<!-- akhir carousel card -->
<!-- kategori -->
<div class="ps-4 pe-5 d-flex gap-4 vw-100" style="height: 500px;">
  <!-- Pria -->
  <div class="position-relative w-100" style="z-index: 2; ">
    <img src="img/Pria.jpeg" class="img-fluid mb-2 w-100 h-100" style="object-fit: cover;" alt="...">
    <div class="position-absolute top-78 w-100 d-flex">
      <a href="pria" class="button-54 mt-3 m-auto text-center" role="button">Pri</a>
    </div>
  </div>
  <!-- akhir Pria -->
  <!-- Anak -->
  <div class="position-relative w-100" style="z-index: 2; ">
    <img src="img/Anak.jpeg" class="img-fluid mb-2 w-100 h-100" style="object-fit: cover;" alt="...">
    <div class="position-absolute top-78 w-100 d-flex">
      <a href="anak" class="button-55 mt-3 m-auto text-center" role="button">SH</a>
    </div>
  </div>
  <!-- Akhir Anak -->
  <!-- Wanita -->
  <div class="position-relative w-100" style="z-index: 2;">
    <img src="img/Wanita.jpeg" class="img-fluid mb-2 w-100 h-100" style="object-fit: cover;" alt="...">
    <div class="position-absolute top-78 w-100 d-flex">
      <a href="wanita" class="button-56 mt-3 m-auto text-center" role="button">Wani</a>
    </div>
  </div>
  <!-- Akhir Wanita -->
</div>
<!-- akhir kategori -->

<!-- Produk terbaik -->
<div class="container p-3 mt-5 ">
  <h3 class="ps-4 mt-2 fw-bold text-center">PRODUK TERBAIK ADIDAS</h3>
  <!-- carousel -->
  <div id="carouselExampleIndicators1" class="carousel slide px-4 m-auto" style="width: 85.3%;">
    <!-- indikator carousel -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active bg-dark"
        id="first1" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators1" class="bg-dark" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators1" class="bg-dark" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" id="last1" data-bs-target="#carouselExampleIndicators1" class="bg-dark" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
    </div>
    <!-- akhir indikator carousel -->
    <!-- isi carousel -->
    <div class="carousel-inner pb-5">
      <!-- halaman 1 -->
      <div class="carousel-item active bg-white">
        <div class="d-flex gap-2 m-auto w-100">
          @foreach ($produks->slice(0,4) as $produk)
          <!-- Terbaik 1 carousel -->
          <a href="/produk/{{ Str::slug($produk->nama) }}/{{ $produk->warna->warna }}"
            class="text-black nav-link hover-border">
            <div class="card border-0" style="width: 16rem;">
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
                    <div class="">
                      <img src="{{ asset('img/'. $produk->gambar->first()->gambar) }}" class="card-img-top rounded-0"
                        alt="...">
                      <button type="submit" class="border-0 position-absolute start-100 bg-transparent"
                        style="margin-left: -45px; margin-top: 17px;">
                        @auth
                        @if ($produk->wishlist != NULL)
                        @foreach ($produk_wishlist as $wishlist)
                        @if(auth()->user()->id == $wishlist->user_id && $produk->id ==
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
                  <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                    <p class="card-text mt-1 fs-vs text-muted">{{ $produk->detailproduk->pengguna }} {{
                      $produk->detailproduk->kategori }}</p>
                    <p class="card-text fs-vs text-uppercase" style="margin-top: -7px;height: 26px;overflow: hidden;">
                      {{
                      $produk->nama
                      }}
                    </p>
                    <p class="card-text fs-vs" style="margin-top: -10px;">Rp. {{
                      number_format($produk->harga
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
          @foreach ($produks->slice(4,4) as $produk)
          <!-- Terbaik 1 carousel -->
          <a href="/produk/{{ Str::slug($produk->nama) }}/{{ $produk->warna->warna }}"
            class="text-black nav-link hover-border">
            <div class="card border-0" style="width: 16rem;">
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
                    <div class="">
                      <img src="{{ asset('img/'. $produk->gambar->first()->gambar) }}" class="card-img-top rounded-0"
                        alt="...">
                      <button type="submit" class="border-0 position-absolute start-100 bg-transparent"
                        style="margin-left: -45px; margin-top: 17px;">
                        @auth
                        @if ($produk->wishlist != NULL)
                        @foreach ($produk_wishlist as $wishlist)
                        @if(auth()->user()->id == $wishlist->user_id && $produk->id ==
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
                  <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                    <p class="card-text mt-1 fs-vs text-muted">{{ $produk->detailproduk->pengguna }} {{
                      $produk->detailproduk->kategori }}</p>
                    <p class="card-text fs-vs text-uppercase" style="margin-top: -7px;height: 26px;overflow: hidden;">{{
                      $produk->nama
                      }}
                    </p>
                    <p class="card-text fs-vs" style="margin-top: -10px;">Rp. {{
                      number_format($produk->harga
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
          @foreach ($produks->slice(8,4) as $produk)
          <!-- Terbaik 1 carousel -->
          <a href="/produk/{{ Str::slug($produk->nama) }}/{{ $produk->warna->warna }}"
            class="text-black nav-link hover-border">
            <div class="card border-0" style="width: 16rem;">
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
                    <div class="">
                      <img src="{{ asset('img/'. $produk->gambar->first()->gambar) }}" class="card-img-top rounded-0"
                        alt="...">
                      <button type="submit" class="border-0 position-absolute start-100 bg-transparent"
                        style="margin-left: -45px; margin-top: 17px;">
                        @auth
                        @if ($produk->wishlist != NULL)
                        @foreach ($produk_wishlist as $wishlist)
                        @if(auth()->user()->id == $wishlist->user_id && $produk->id ==
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
                  <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                    <p class="card-text mt-1 fs-vs text-muted">{{ $produk->detailproduk->pengguna }} {{
                      $produk->detailproduk->kategori }}</p>
                    <p class="card-text fs-vs text-uppercase" style="margin-top: -7px;height: 26px;overflow: hidden;">{{
                      $produk->nama
                      }}
                    </p>
                    <p class="card-text fs-vs" style="margin-top: -10px;">Rp. {{
                      number_format($produk->harga
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
          @foreach ($produks->slice(12,4) as $produk)
          <!-- Terbaik 1 carousel -->
          <a href="/produk/{{ Str::slug($produk->nama) }}/{{ $produk->warna->warna }}"
            class="text-black nav-link hover-border">
            <div class="card border-0" style="width: 16rem;">
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
                    <div class="">
                      <img src="{{ asset('img/'. $produk->gambar->first()->gambar) }}" class="card-img-top rounded-0"
                        alt="...">
                      <button type="submit" class="border-0 position-absolute start-100 bg-transparent"
                        style="margin-left: -45px; margin-top: 17px;">
                        @auth
                        @if ($produk->wishlist != NULL)
                        @foreach ($produk_wishlist as $wishlist)
                        @if(auth()->user()->id == $wishlist->user_id && $produk->id ==
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
                  <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: auto;">
                    <p class="card-text mt-1 fs-vs text-muted">{{ $produk->detailproduk->pengguna }} {{
                      $produk->detailproduk->kategori }}</p>
                    <p class="card-text fs-vs text-uppercase" style="margin-top: -7px;height: 26px;overflow: hidden;">{{
                      $produk->nama
                      }}
                    </p>
                    <p class="card-text fs-vs" style="margin-top: -10px;">Rp. {{
                      number_format($produk->harga
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
</div>
<!-- akhir Produk terbaik -->
<!-- tentang adidas -->
<div class="bg-grey">
  <div class="container d-flex gap-5 py-4">
    <div class="w-50 my-5">
      <p class="fs-vs fw-bold">DAPATKAN KOLEKSI SEPATU OLAHRAGA, SNEAKER & PERLENGKAPAN OLAHRAGA TERBARU DI ADIDAS
        INDONESIA</p>
      <p class="fs-vs">Selamat datang di situs resmi adidas Indonesia di mana Anda dapat membeli perlengkapan dan
        aksesori olahraga berkualitas. Toko Online Resmi adidas Indonesia menyediakan produk terbaik mulai dari sepatu
        olahraga, dan sneaker, hingga aksesori olahraga lainnya untuk semua kebutuhan Anda. Tersedia berbagai macam
        sepatu yang cocok untuk setiap momen dan nyaman dipakai saat berolahraga. Di Toko Online Resmi adidas Indonesia,
        tersedia berbagai macam produk top seperti Sepatu Sepak Bola Ace & X, adidas Originals, Sepatu Training, Atasan
        untuk Running, Sport Bra Wanita, Aksesori Olahraga dan masih banyak lagi. Toko Online Resmi adidas terus
        memperbarui daftar produknya sehingga Anda dapat membeli koleksi sepatu, pakaian, aksesori olahraga terbaru
        kami. Temukan sepatu favorit Anda mulai dari sepatu untuk pria, wanita, dan anak-anak hanya di toko online resmi
        kami.</p>
    </div>
    <div class="w-50 my-5">
      <p class="fs-vs fw-bold">ADIDAS INDONESIA MENYEDIAKAN SEMUA KEBUTUHAN OLAHRAGA ANDA</p>
      <p class="fs-vs">Mencari perlengkapan olahraga yang dapat meningkatkan performa Anda dan lebih nyaman saat
        digunakan berolahraga? Hanya ada satu tempat yang dapat menyediakan semua kebutuhan olahraga Anda mulai dari
        sepatu hingga aksesori, yaitu Toko Online Resmi adidas Indonesia. adidas Indonesia menyediakan perlengkapan
        olahraga mulai dari sepatu training, celana running, hingga aksesori olahraga untuk pria, wanita, dan anak-anak.
        Toko Online Resmi adidas Indonesia menawarkan banyak deal untuk Anda yang berbelanja secara online; mulai dari
        gratis ongkos kirim jika Anda berbelanja minimal Rp 900.000, easy return, fast response, dan masih banyak lagi.
        Beli segera sepatu untuk segala jenis olahraga hanya di adidas Indonesia.</p>
    </div>
  </div>
</div>
</div>
<!-- akhir tentang adidas -->
</div>
@endsection

@section('script')
<script src="js/index.js"></script>
@endsection