@extends('layouts.layoutIndex')

@section('main')
<div class="mt-7">
  <div class="d-flex px-5 mx-5">
    <!-- bagian kiri -->
    <div class="w-60">
      <!-- Header Keranjang -->
      <div class="d-flex px-5 pt-5 pb-3 justify-content-between">
        <p><span class="fw-bold fs-4">BAG ANDA</span> {{ $keranjangs->count() }}
          ITEM</p>
        <a href="/" class="text-black hover-black fs-vs align-self-center">Lanjutkan Belanja</a>
      </div>
      <!-- akhir header keranjang -->

      <!-- item keranjang -->
      @php
      $jumlahHarga = 0;
      @endphp
      @foreach ($keranjangs as $keranjang)
      <!-- item pertama -->
      <div class="d-flex justify-content-between border-top border-2 mx-5 p-3">
        <!-- bagian kiri -->
        <div class="d-flex">
          <a href="/produk/{{ Str::slug($keranjang->produk->nama) }}/{{ $keranjang->produk->warna->warna }}">
            <img src={{ asset('img/'. $keranjang->produk->gambar->first()->gambar) }} width="170px" height="170px"
            alt="">
          </a>
          <div class="d-flex flex-column justify-content-between">
            <div class="ms-3">
              <p class="fs-vs m-0 fw-bold">{{ $keranjang->produk->nama }}</p>
              <p class="fs-vs m-0 ">Gender : <span class="text-uppercase">{{ $keranjang->produk->detailproduk->pengguna
                  }}</span></p>
              <p class="fs-vs m-0 ">Size : {{ $keranjang->ukuran->ukuran }}</p>
              <p class="fs-vs m-0 ">Color : <span class="text-uppercase">{{ $keranjang->produk->deskripsiWarna }}</span>
              </p>
              <p class="fs-vs m-0 ">@if($keranjang->produk->produk_ukuran->first()->stock > 0) Tersedia @else <span
                  class="text-danger">Habis</span>@endif</p>
            </div>
            <form action="/keranjang/{{ $keranjang->id }}" method="POST">
              @method('delete')
              @csrf
              <button type="submit"
                class="fs-vs text-black hover-black ms-2 w-25 text-center bg-transparent border-0 text-decoration-underline w-auto">Hapus</button>
            </form>
          </div>
        </div>
        <!-- aklhir bagian kiri -->
        <!-- bagian tengah -->
        <div class="">
          <p class="text-center fw-bold fs-vs">Jumlah</p>
          <button class="border-1 bg-transparent" style="height: 30px;width: 60px">{{ $keranjang->jumlahItem }}</button>
        </div>
        <!-- akhir bagian tengah -->
        <!-- bagian kanan -->
        <p class="fw-s align-self-center">Rp. {{ number_format($keranjang->produk->harga * $keranjang->jumlahItem, 0,
          ',', '.') }}</p>
        @php
        $jumlahHarga += $keranjang->produk->harga * $keranjang->jumlahItem
        @endphp
        <!-- akhir bagian kanan -->
      </div>
      <!-- akhir item pertama -->
      @endforeach
      <!-- akhir item keranjang -->
      @if($keranjangs->count() == 0)
      <div class="alert alert-danger fade show" role="alert">
        <strong>Harap Masukkan Item Kedalam Keranjang Terlebih Dahulu</strong>
      </div>
      @endif
      <!-- button beli -->
      <a href="@if($keranjangs->count() == 0) # @else /checkout @endif"
        class="bg-dark text-white fs-vs fw-bold py-2 px-4 mx-6 d-block w-25">CHECKOUT
        <span class="ms-5">---></span></a>
      <!-- akhir button beli -->

      <!-- 3menu -->
      <div class="d-flex px-5 mx-5 my-3 justify-content-between">
        <div class="w-100 d-flex p-0 m-0">
          <ion-icon class="fw-bold fs-3 p-0 m-0 align-self-center me-2" name="bicycle-outline"></ion-icon>
          <p class="fs-s fw-bold p-0 m-0">Gratis ongkir untuk semua pesanan!</p>
        </div>
        <div class="w-100 d-flex p-0 m-0">
          <ion-icon class="fw-bold fs-3 p-0 m-0 align-self-center me-2" name="reload-outline"></ion-icon>
          <p class="fs-s fw-bold p-0 m-0">Pengembalian Gratis & Mudah</p>
        </div>
        <div class="w-100 d-flex p-0 m-0">
          <ion-icon class="fw-bold fs-3 p-0 m-0 align-self-center me-2" name="checkmark-outline"></ion-icon>
          <p class="fs-s fw-bold p-0 m-0">Cicilan Akulaku tersedia sekarang!</p>
        </div>
      </div>
      <!-- akhir 3menu -->
    </div>
    <!-- akhir bagian kiri -->
    <!-- bagian kanan -->
    <div class="w-40 me-4">
      <!-- Ringkasan pesanan -->
      <div class="bg-grey mt-5 mb-3 mx-5 p-3">
        <!-- button checkout -->
        <a href="@if($keranjangs->count() == 0) # @else /checkout @endif"
          class="bg-dark text-white fs-vs fw-bold py-3 w-100 px-5 d-block">CHECKOUT <span class="ms-5">---></span></a>
        <!-- akhir button checkout -->
        <!-- harga pesanan -->
        <p class="fw-bold fs-5 my-2">RINGKASAN PESANAN:</p>
        <ul class="list-group bg-white rounded-0">
          <li class="list-group-item fs-s">{{ $keranjangs->where('user_id', auth()->user()->id)->count() }} Produk
          </li>
          <li class="list-group-item fs-s">
            <div class="d-flex justify-content-between">
              <p class="m-0">Total Produk</p>
              <p class="m-0">Rp {{ number_format($jumlahHarga, 0,
                ',', '.') }}</p>
            </div>
          </li>
          <li class="list-group-item fs-s">
            <div class="d-flex justify-content-between">
              <p class="m-0">Pengiriman</p>
              <p class="m-0">GRATIS</p>
            </div>
          </li>
          <li class="list-group-item fs-s">
            <div class="d-flex justify-content-between fw-bold">
              <p class="m-0">Total <br> (Termasuk pajak)</p>
              <p class="m-0">Rp {{ number_format($jumlahHarga, 0,
                ',', '.') }}</p>
            </div>
          </li>
        </ul>
        <!-- akhir harga pesanan -->
      </div>
      <!-- akhir ringkasan pesanan -->

      <!-- need help? -->
      <div class=" py-4 my-2 mx-5">
        <p class="fw-bold fs-5">NEED HELP?</p>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Ordering</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Promotions & Vouchers</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Payment</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Delivery</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Returns and Refunds</a>
      </div>
      <!-- akhir need help? -->
    </div>
  </div>
  <!-- akhir bagian kanan -->
  <!-- Anda Mungkin Juga Menyukai -->
  <div class="bg-grey pt-5 pb-3">
    <p class="fw-bold fs-3 text-center">ANDA MUNGKIN JUGA MENYUKAI</p>
    <!-- carousel -->
    <div id="carouselExampleIndicators1" class="carousel slide px-4 m-auto" style="width: 55.5%">
      <!-- indikator carousel -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active bg-dark"
          id="first1" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" id="last1" data-bs-target="#carouselExampleIndicators1" class="bg-dark"
          data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <!-- akhir indikator carousel -->
      <!-- isi carousel -->
      <div class="carousel-inner pb-5">
        <!-- halaman 1 -->
        <div class="carousel-item active">
          <div class="d-flex gap-2 m-auto w-100">
            @foreach ($produks->slice(0,4) as $produk)
            <!-- Terbaik 1 carousel -->
            <a href="/produk/{{ Str::slug($produk->nama) }}/{{ $produk->warna->warna }}"
              class="text-black nav-link hover-border">
              <div class="card border-0 rounded-0 h-100" style="width: 12rem;">
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
        <div class="carousel-item">
          <div class="d-flex gap-2 m-auto w-100">
            @foreach ($produks->slice(4,4) as $produk)
            <!-- Terbaik 1 carousel -->
            <a href="/produk/{{ Str::slug($produk->nama) }}/{{ $produk->warna->warna }}"
              class="text-black nav-link hover-border">
              <div class="card border-0 rounded-0 h-100" style="width: 12rem;">
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
        </div>s
        <!-- akhir halaman 2 -->
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
  <!-- akhir Anda Mungkin Juga Menyukai -->
</div>
@endsection

@section('script')
<script src="js/keranjang.js"></script>
@endsection