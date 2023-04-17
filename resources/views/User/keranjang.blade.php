@extends('layouts.layoutIndex')

@section('main')
<div class="mt-7">
  <div class="d-flex px-5 mx-5">
    <!-- bagian kiri -->
    <div class="w-60">
      <!-- Header Keranjang -->
      <div class="d-flex px-5 pt-5 pb-3 justify-content-between">
        <p><span class="fw-bold fs-4">BAG ANDA</span> 2 ITEM</p>
        <a href="#" class="text-black hover-black fs-vs align-self-center">Lanjutkan Belanja</a>
      </div>
      <!-- akhir header keranjang -->

      <!-- item keranjang -->
      <!-- item pertama -->
      <div class="d-flex justify-content-between border-top border-2 mx-5 p-3">
        <!-- bagian kiri -->
        <div class="d-flex">
          <img src="img/Produk1.2.jpeg" width="170px" height="170px" alt="">
          <div class="d-flex flex-column justify-content-between">
            <div class="ms-3">
              <p class="fs-vs m-0 fw-bold">SEPATU SAMBA OG</p>
              <p class="fs-vs m-0 ">Gender : Pria</p>
              <p class="fs-vs m-0 ">Size : 12.5</p>
              <p class="fs-vs m-0 ">Color : White/Black/Multicolor</p>
              <p class="fs-vs m-0 ">Tersedia</p>
            </div>
            <a href="#" class="fs-vs text-black hover-black ms-2 w-25 text-center">Hapus</a>
          </div>
        </div>
        <!-- aklhir bagian kiri -->
        <!-- bagian tengah -->
        <select
          class="form-select bg-white border-1 border-dark rounded-0 w-auto fw-bold fs-vs me-2 py-2 align-self-center"
          aria-label="Default select example">
          <option value="1" selected>1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <!-- akhir bagian tengah -->
        <!-- bagian kanan -->
        <p class="fw-s align-self-center">Rp 2.200.000</p>
        <!-- akhir bagian kanan -->
      </div>
      <!-- akhir item pertama -->
      <!-- item kedua -->
      <div class="d-flex justify-content-between border-top border-2 mx-5 p-3">
        <!-- bagian kiri -->
        <div class="d-flex">
          <img src="img/Produk1.2.jpeg" width="170px" height="170px" alt="">
          <div class="d-flex flex-column justify-content-between">
            <div class="ms-3">
              <p class="fs-vs m-0 fw-bold">SEPATU SAMBA OG</p>
              <p class="fs-vs m-0 ">Gender : Pria</p>
              <p class="fs-vs m-0 ">Size : 12.5</p>
              <p class="fs-vs m-0 ">Color : White/Black/Multicolor</p>
              <p class="fs-vs m-0 ">Tersedia</p>
            </div>
            <a href="#" class="fs-vs text-black hover-black ms-2 w-25 text-center">Hapus</a>
          </div>
        </div>
        <!-- aklhir bagian kiri -->
        <!-- bagian tengah -->
        <select
          class="form-select bg-white border-1 border-dark rounded-0 w-auto fw-bold fs-vs me-2 py-2 align-self-center"
          aria-label="Default select example">
          <option value="1" selected>1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <!-- akhir bagian tengah -->
        <!-- bagian kanan -->
        <p class="fw-s align-self-center">Rp 2.200.000</p>
        <!-- akhir bagian kanan -->
      </div>
      <!-- akhir item kedua -->
      <!-- akhir item keranjang -->
      <!-- button beli -->
      <button class="bg-dark text-white fs-vs fw-bold py-2 px-4 mx-6">CHECKOUT <span class="ms-5">---></span></button>
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
        <button class="bg-dark text-white fs-vs fw-bold py-3 w-100 px-5">CHECKOUT <span
            class="ms-5">---></span></button>
        <!-- akhir button checkout -->
        <!-- harga pesanan -->
        <p class="fw-bold fs-5 my-2">RINGKASAN PESANAN:</p>
        <ul class="list-group bg-white rounded-0">
          <li class="list-group-item fs-s">2 Produk</li>
          <li class="list-group-item fs-s">
            <div class="d-flex justify-content-between">
              <p class="m-0">Total Produk</p>
              <p class="m-0">Rp 4.100.000</p>
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
              <p class="m-0">Rp 4.100.000</p>
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
          <div class="d-flex gap-2 m-auto">
            <!-- Terbaik 1 carousel -->
            <a href="#" class="text-black nav-link hover-border">
              <div class="card border-0" style="width: 12rem;">
                <div class="">
                  <img src="img/Terbaik1.jpeg" class="card-img-top rounded-0" alt="...">
                  <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                    style="margin-left: -45px; margin-top: 17px;">
                    <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                  </button>
                </div>
                <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: 100px;">
                  <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
                  <p class="card-text fs-vs" style="margin-top: -7px;">SLIDES ADILETTE AYOON</p>
                  <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 900.000</p>
                </div>
              </div>
            </a>
            <!-- akhir Terbaik 1 carousel -->

            <!-- Terbaik 2 carousel -->
            <a href="#" class="text-black nav-link hover-border">
              <div class="card border-0" style="width: 12rem;">
                <div class="">
                  <img src="img/Terbaik2.jpeg" class="card-img-top rounded-0" alt="...">
                  <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                    style="margin-left: -45px; margin-top: 17px;">
                    <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                  </button>
                </div>
                <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: 100px;">
                  <p class="card-text mt-1 fs-vs text-muted">Pria Lifestyle</p>
                  <p class="card-text fs-vs" style="margin-top: -7px;">TRACK JACKET ADICOLOR CONTEMPO (UNISEKS)</p>
                  <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.700.000</p>
                </div>
              </div>
            </a>
            <!-- akhir Terbaik 2 carousel -->

            <!-- Terbaik 3 carousel -->
            <a href="#" class="text-black nav-link hover-border">
              <div class="card border-0" style="width: 12rem;">
                <div class="">
                  <img src="img/Terbaik3.jpeg" class="card-img-top rounded-0" alt="...">
                  <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                    style="margin-left: -45px; margin-top: 17px;">
                    <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                  </button>
                </div>
                <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: 100px;">
                  <p class="card-text mt-1 fs-vs text-muted">Pria Lifestyle</p>
                  <p class="card-text fs-vs" style="margin-top: -7px;">ADILETTE 4.0 SANDALS</p>
                  <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.100.000</p>
                </div>
              </div>
            </a>
            <!-- akhir Terbaik 3 carousel -->

            <!-- Terbaik 4 carousel -->
            <a href="#" class="text-black nav-link hover-border">
              <div class="card border-0" style="width: 12rem;">
                <div class="">
                  <img src="img/Terbaik4.jpeg" class="card-img-top rounded-0" alt="...">
                  <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                    style="margin-left: -45px; margin-top: 17px;">
                    <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                  </button>
                </div>
                <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: 100px;">
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
        <div class="carousel-item">
          <div class="d-flex gap-2 m-auto">
            <!-- Terbaik 5 carousel -->
            <a href="#" class="text-black nav-link hover-border">
              <div class="card border-0" style="width: 12rem;">
                <div class="">
                  <img src="img/Terbaik5.jpeg" class="card-img-top rounded-0" alt="...">
                  <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                    style="margin-left: -45px; margin-top: 17px;">
                    <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                  </button>
                </div>
                <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: 100px;">
                  <p class="card-text mt-1 fs-vs text-muted">Wanita Lifestyle</p>
                  <p class="card-text fs-vs" style="margin-top: -7px;">ADICOLOR HERITAGE NOW CALI TEE DRESS</p>
                  <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.100.000</p>
                </div>
              </div>
            </a>
            <!-- akhir Terbaik 5 carousel -->

            <!-- Terbaik 6 carousel -->
            <a href="#" class="text-black nav-link hover-border">
              <div class="card border-0" style="width: 12rem;">
                <div class="">
                  <img src="img/Terbaik6.jpeg" class="card-img-top rounded-0" alt="...">
                  <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                    style="margin-left: -45px; margin-top: 17px;">
                    <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                  </button>
                </div>
                <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: 100px;">
                  <p class="card-text mt-1 fs-vs text-muted">Pria Lifestyle</p>
                  <p class="card-text fs-vs" style="margin-top: -7px;">TRACK PANTS CLASSICS FIREBIRD PRIMEBLUE</p>
                  <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 1.400.000</p>
                </div>
              </div>
            </a>
            <!-- akhir Terbaik 6 carousel -->

            <!-- Terbaik 7 carousel -->
            <a href="#" class="text-black nav-link hover-border">
              <div class="card border-0" style="width: 12rem;">
                <div class="">
                  <img src="img/Terbaik7.jpeg" class="card-img-top rounded-0" alt="...">
                  <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                    style="margin-left: -45px; margin-top: 17px;">
                    <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                  </button>
                </div>
                <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: 100px;">
                  <p class="card-text mt-1 fs-vs text-muted">Uniseks Lifestyle</p>
                  <p class="card-text fs-vs" style="margin-top: -7px;">ADICANE CLOGS</p>
                  <p class="card-text fs-vs" style="margin-top: -10px;">Rp. 750.000</p>
                </div>
              </div>
            </a>
            <!-- akhir Terbaik 7 carousel -->

            <!-- Terbaik 8 carousel -->
            <a href="#" class="text-black nav-link hover-border">
              <div class="card border-0" style="width: 12rem;">
                <div class="">
                  <img src="img/Terbaik8.jpeg" class="card-img-top rounded-0" alt="...">
                  <button onclick="return false;" class="border-0 position-absolute start-100 wishlist"
                    style="margin-left: -45px; margin-top: 17px;">
                    <ion-icon style="font-size: 1.2rem;" name="heart-outline"></ion-icon>
                  </button>
                </div>
                <div class="card-body px-2 py-0 d-flex flex-column justify-content-between" style="height: 100px;">
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