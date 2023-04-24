@extends('layouts.layoutIndex')

@section('main')
<div class="mt-7">
  <!-- 3 navbar -->
  <div class="d-flex justify-content-center border-bottom gap-5" id="1">
    <a class="nav-link hover-line fs-s py-2">GRATIS ONGKIR UNTUK PESANAN MIN. 900RB</a>
    <a class="nav-link hover-line fs-s py-2">CHAT DENGAN KAMI</a>
    <a class="nav-link hover-line fs-s py-2">CICILAN AKULAKU TERSEDIA SEKARANG!</a>
  </div>
  <!-- akhir 3 navbar -->
  <div class="container py-4 px-5 d-flex gap-2">
    <!-- bagian kiri -->
    <div class="w-75 me-3">
      <p class="fs-3 fw-bold">DETAIL ANDA</p>
      <p>Anda dapat mengedit detail Anda di bawah kapan pun sehingga akun Anda selalu terbarui.</p>

      @if (session()->has('success'))
      <div class="alert alert-dark alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if (session()->has('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('error') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      <form action="/informasipribadi/{{ auth()->user()->id }}" method="POST">
        @csrf
        @method('put')
        <input type="hidden" name="updateDetail" value="true">
        <div class="d-flex gap-3">
          <!-- nama depan -->
          <div class="form-floating mb-3 w-100">
            <input type="text" name="namaDepan" value="{{ auth()->user()->namaDepan }}"
              class="form-control rounded-0 border border-1 border-dark w-100 @error('namaDepan') is-invalid @enderror"
              id="namaDepan" placeholder="name@example.com" required>
            <label for="namaDepan" class="text-muted">Nama Depan<span class="text-danger">*</span></label>
            @error('namaDepan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <!-- akhir nama depan -->
          <!-- nama belakang -->
          <div class="form-floating mb-3 w-100">
            <input type="text" name="namaBelakang" value="{{ auth()->user()->namaBelakang }}"
              class="form-control rounded-0 border border-1 border-dark w-100 @error('namaBelakang') is-invalid @enderror"
              id="namaBelakang" placeholder="name@example.com" required>
            <label for="namaBelakang" class="text-muted">Nama belakang<span class="text-danger">*</span></label>
            @error('namaBelakang')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <!-- akhir nama belakang -->
        </div>
        <!-- nomor telepon -->
        <div class="form-floating mb-3 w-100">
          <input type="text" name="nomorTelepon" value="{{ auth()->user()->nomorTelepon }}"
            class="form-control rounded-0 border border-1 border-dark w-50 @error('nomorTelepon') is-invalid @enderror"
            id="nomorTelepon" placeholder="name@example.com" required>
          <label for="nomorTelepon" class="text-muted">Nomor Telepon<span class="text-danger">*</span></label>
          @error('nomorTelepon')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <!-- akhir nomor telepon -->
        <!-- tanggal lahir -->
        <p class="fs-5 fw-bold my-4">TANGGAL LAHIR</p>
        <div class="form-floating mb-3 w-100">
          <input type="text" class="form-control rounded-0 border border-1 border-dark w-50 text-muted"
            id="floatingInput" placeholder="name@example.com" value="24-04-2023" readonly>
          <label for="floatingInput" class="text-muted">dd-mm-yyy<span class="text-danger">*</span></label>
        </div>
        <p>Kami mengumpulkan tanggal lahir untuk mematuhi Kebijakan Privasi. Selain itu, Anda juga akan mendapatkan
          kejutan dari kami di hari ulang tahun Anda!</p>
        <!-- akhir tanggal lahir -->
        <!-- gender -->
        <p class="fs-5 fw-bold my-4">GENDER</p>
        <div class="d-flex gap-4">
          <div class="form-check">
            <input class="form-check-input disabled" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
              @if(auth()->user()->gender == 'pria') checked @endif disabled>
            <label class="form-check-label fs-6" for="flexRadioDefault1">
              Pria
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input disabled" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
              @if(auth()->user()->gender == 'wanita') checked @endif disabled>
            <label class="form-check-label fs-6" for="flexRadioDefault2">
              Wanita
            </label>
          </div>
        </div>
        <!-- akhir gender -->
        <!-- email -->
        <p class="fs-5 fw-bold my-4">EMAIL</p>
        <div class="form-floating mb-3 w-100">
          <input type="text" class="form-control rounded-0 border border-1 border-dark w-50 text-muted"
            id="floatingInput" placeholder="name@example.com" value="{{ auth()->user()->email }}" readonly>
          <label for="floatingInput" class="text-muted">Email<span class="text-danger">*</span></label>
        </div>
        <!-- akhir email -->
        <!-- button simpan perubahan data -->
        <button class="bg-dark text-white fs-vs fw-bold py-3 w-50 px-5">SIMPAN PERUBAHAN <span
            class="ms-5">---></span></button>
        <!-- akhir button simpan perubahan data -->
      </form>
      <form action="/informasipribadi/{{ auth()->user()->id }}" method="POST">
        @csrf
        @method('put')
        <input type="hidden" name="updatePassword" value="true">
        <!-- ubah kata sandi -->
        <p class="fs-5 fw-bold mt-4 mb-0">KATA SANDI</p>
        <div class="text-end w-50 mb-2">
          <button id="showpasswordLama" onclick="return false"
            class="border-0 bg-transparent mt-0 text-black fs-s fw-bold text-decoration-underline position-relative">
            <ion-icon id="iconLama" class="text-black fs-4 fw-bold mb-0 position-absolute" style="left: -25px;"
              name="eye-outline"></ion-icon><span id="text-show-hide">SHOW</span>
          </button>
        </div>
        <div class="form-floating w-50">
          <input type="password" name="passwordLama" class="form-control rounded-0 border border-1 border-dark w-100"
            id="passwordLama" placeholder="Password" required>
          <label for="passwordLama" class="text-muted">Kata Sandi Lama<span class="text-danger">*</span></label>
        </div>
        <div class="text-end w-50 mb-2">
          <button id="showpassword" onclick="return false"
            class="border-0 bg-transparent mt-0 text-black fs-s fw-bold text-decoration-underline position-relative">
            <ion-icon id="icon" class="text-black fs-4 fw-bold mb-0 position-absolute" style="left: -25px;"
              name="eye-outline"></ion-icon><span id="text-show-hide2">SHOW</span>
          </button>
        </div>
        <div class="form-floating w-50">
          <input type="password" name="password"
            class="form-control rounded-0 border border-1 border-dark w-100 @error('password') is-invalid @enderror"
            id="password" placeholder="Password" required>
          <label for="password" class="text-muted">Kata Sandi Baru<span class="text-danger">*</span></label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <!-- akhir ubah kata sandi -->
        <!-- button simpan ubah sandi -->
        <button class="bg-dark text-white fs-vs fw-bold py-3 w-50 px-5 mt-3">PERBAHARUI KATA SANDI <span
            class="ms-5">---></span></button>
        <!-- akhir button simpan ubah sandi -->
      </form>
    </div>
    <!-- akhir bagian kiri -->

    <!-- bagian kanan -->
    <div class="w-25">
      <a href="/akunsaya" class="text-black d-block mb-3 hover-black">Akun Saya</a>
      <a href="/informasipribadi" class="fw-bold nav-link d-block mb-3">Informasi Pribadi</a>
      <a href="/daftaralamat" class="text-black d-block mb-3 hover-black">Daftar Alamat</a>
      <a href="/riwayatpesanan" class="text-black d-block mb-3 hover-black">Riwayat Pesanan</a>
      <a href="/wishlist" class="text-black d-block mb-3 hover-black">Wish List</a>
      <hr>
      <!-- need help? -->
      <div class=" py-4 my-2">
        <p class="fw-bold fs-5">NEED HELP?</p>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Ordering</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Promotions & Vouchers</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Payment</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Delivery</a>
        <a href="#" class="hover-black text-black d-block fs-s mb-2">Returns and Refunds</a>
      </div>
      <!-- akhir need help? -->
    </div>
    <!-- akhir bagian kanan -->
  </div>
</div>
@endsection

@section('script')
<script>
  // scrolling
var lastScrollTop = 0

$(window).scroll(function(){
  let wScroll = $(this).scrollTop();

  if(wScroll > lastScrollTop && wScroll > 150){
    $('.navbar').addClass("hilang")
    $('.navbar').removeClass("top-0")
  }else if(wScroll < lastScrollTop){
    $('.navbar').addClass("top-0")
    $('.navbar').removeClass("hilang")
  }

  lastScrollTop = wScroll <= 0 ? 0 : wScroll
})

// show password
let icon = document.getElementById('icon');
let password = document.getElementById('password');
let showPassword = document.getElementById('showpassword');

showPassword.addEventListener('click', function(){
  if (password.getAttribute("type") === 'password') {
    password.setAttribute("type", "text")
    icon.setAttribute("name", "eye-off-outline")
    document.getElementById('text-show-hide2').innerHTML = "HIDE"
  } else {
    password.setAttribute("type", "password")
    icon.setAttribute("name", "eye-outline")
    document.getElementById('text-show-hide2').innerHTML = "SHOW"
  }
})

let icon2 = document.getElementById('iconLama');
let password2 = document.getElementById('passwordLama');
let showPassword2 = document.getElementById('showpasswordLama');

showPassword2.addEventListener('click', function(){
  if (password2.getAttribute("type") === 'password') {
    password2.setAttribute("type", "text")
    icon2.setAttribute("name", "eye-off-outline")
    document.getElementById('text-show-hide').innerHTML = "HIDE"
  } else {
    password2.setAttribute("type", "password")
    icon2.setAttribute("name", "eye-outline")
    document.getElementById('text-show-hide').innerHTML = "SHOW"
  }
})
</script>
@endsection