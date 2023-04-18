@extends('layouts.layoutIndex')

@section('main')
<div class="position-relative mt-7 px-5 mx-5 pb-2">
  <div class=" mx-5 px-5 d-flex gap-5">
    <!-- sisi kiri -->
    <div class="ms-4 w-43">
      <p class="fw-bold fs-1">MASUK</p>
      <p class="fs-6 text-decoration-underline ">Lupa Kata Sandi Anda?</p>
      <form action="/login" method="POST">
        @csrf

        @if (session()->has('success'))
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
          <strong>{{ session('success') }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{ session('loginError') }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="form-floating">
          <input type="email" name="email"
            class="form-control rounded-0 border border-1 border-dark w-100 @error('email') is-invalid @enderror"
            id="email" placeholder="name@example.com" value="{{ old('email') }}">
          <label for="email" class="text-muted">Email<span class="text-danger">*</span></label>
          @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="text-end py-2">
          <button id="showpassword" onclick="return false"
            class="border-0 bg-transparent mt-0 text-black fs-s fw-bold text-decoration-underline position-relative">
            <ion-icon id="icon" class="text-black fs-4 fw-bold mb-0 position-absolute" style="left: -25px;"
              name="eye-outline"></ion-icon><span id="text-show-hide">SHOW</span>
          </button>
        </div>
        <div class="form-floating">
          <input type="password" name="password"
            class="form-control rounded-0 border border-1 border-dark w-100 @error('password') is-invalid @enderror"
            id="password" placeholder="Password">
          <label for="password" class="text-muted">Kata Sandi<span class="text-danger">*</span></label>
          @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <button class="button-57 mt-3 m-auto" role="button" type="submit">SHAA</button>
      </form>
      <p class="my-3">Dengan mengeklik “MASUK”, saya setuju untuk terikat dengan adidas <a href="#"
          class="text-black hover-black text-decoration-underline">Syarat dan Ketentuan</a> (karena mungkin diperbarui
        dari waktu ke waktu), dan adidas <a href="#" class="text-black hover-black text-decoration-underline">Catatan
          Privasi</a> </p>
      <p>ATAU</p>
      <button
        class="bg-transparent py-3 mb-2 border border-1 border-dark px-4 w-50 text-start d-flex justify-content-between hover-grey">
        <p class="fw-bold fs-vs mb-0 d-inline" style="letter-spacing: 3px;">GOOGLE</p>
        <ion-icon name="logo-google" class="fs-4"></ion-icon>
      </button>
      <button
        class="bg-transparent py-3 border border-1 border-dark px-4 w-50 text-start d-flex justify-content-between hover-grey">
        <p class="fw-bold fs-vs mb-0 d-inline" style="letter-spacing: 3px;">FACEBOOK</p>
        <ion-icon name="logo-facebook" class="fs-4"></ion-icon>
      </button>
    </div>
    <!-- akhir sisi kiri -->
    <!-- sisi kanan -->
    <div class="ms-4 w-43">
      <p class="fw-bold fs-1">BUAT AKUN</p>
      <p>Sangat mudah. Masukkan alamat email Anda, isi formulir di halaman berikutnya dan nikmati keuntungan dari
        memiliki akun, misalnya:</p>
      <p class="ms-2">
        <ion-icon class="fs-5 me-2" name="checkmark-outline"></ion-icon>Produk dengan harga spesial sepanjang tahun,
        setiap hari.
      </p>
      <p class="ms-2">
        <ion-icon class="fs-5 me-2" name="checkmark-outline"></ion-icon>Akses awal ke SALE
      </p>
      <p class="ms-2">
        <ion-icon class="fs-5 me-2" name="checkmark-outline"></ion-icon>Tinjauan informasi personal Anda
      </p>
      <p class="ms-2">
        <ion-icon class="fs-5 me-2" name="checkmark-outline"></ion-icon>Lacak & cek pesanan Anda
      </p>
      <p class="ms-2">
        <ion-icon class="fs-5 me-2" name="checkmark-outline"></ion-icon>Kelola Wishlist
      </p>
      <p class="ms-2">
        <ion-icon class="fs-5 me-2" name="checkmark-outline"></ion-icon>Checkout lebih cepat
      </p>
      <a href="/registrasi" class="button-58 mt-3 m-auto text-center" role="button">SHAaaA</a>
    </div>
    <!-- akhir sisi kanan -->
  </div>
</div>
@endsection

@section('script')
<script src="js/login.js"></script>
@endsection