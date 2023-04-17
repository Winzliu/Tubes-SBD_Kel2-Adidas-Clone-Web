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
      <div class="d-flex gap-3">
        <!-- nama depan -->
        <div class="form-floating mb-3 w-100">
          <input type="text" class="form-control rounded-0 border border-1 border-dark w-100" id="floatingInput"
            placeholder="name@example.com">
          <label for="floatingInput" class="text-muted">Nama Depan<span class="text-danger">*</span></label>
        </div>
        <!-- akhir nama depan -->
        <!-- nama belakang -->
        <div class="form-floating mb-3 w-100">
          <input type="text" class="form-control rounded-0 border border-1 border-dark w-100" id="floatingInput"
            placeholder="name@example.com">
          <label for="floatingInput" class="text-muted">Nama belakang<span class="text-danger">*</span></label>
        </div>
        <!-- akhir nama belakang -->
      </div>
      <!-- nomor telepon -->
      <div class="form-floating mb-3 w-100">
        <input type="text" class="form-control rounded-0 border border-1 border-dark w-50" id="floatingInput"
          placeholder="name@example.com">
        <label for="floatingInput" class="text-muted">Nomor Telepon<span class="text-danger">*</span></label>
      </div>
      <!-- akhir nomor telepon -->
      <!-- tanggal lahir -->
      <p class="fs-5 fw-bold my-4">TANGGAL LAHIR</p>
      <div class="form-floating mb-3 w-100">
        <input type="text" class="form-control rounded-0 border border-1 border-dark w-50 text-muted" id="floatingInput"
          placeholder="name@example.com" value="24-04-2023" readonly>
        <label for="floatingInput" class="text-muted">dd-mm-yyy<span class="text-danger">*</span></label>
      </div>
      <p>Kami mengumpulkan tanggal lahir untuk mematuhi Kebijakan Privasi. Selain itu, Anda juga akan mendapatkan
        kejutan dari kami di hari ulang tahun Anda!</p>
      <!-- akhir tanggal lahir -->
      <!-- gender -->
      <p class="fs-5 fw-bold my-4">GENDER</p>
      <div class="d-flex gap-4">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          <label class="form-check-label fs-6" for="flexRadioDefault1">
            Pria
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
          <label class="form-check-label fs-6" for="flexRadioDefault2">
            Wanita
          </label>
        </div>
      </div>
      <!-- akhir gender -->
      <!-- email -->
      <p class="fs-5 fw-bold my-4">EMAIL</p>
      <div class="form-floating mb-3 w-100">
        <input type="text" class="form-control rounded-0 border border-1 border-dark w-50 text-muted" id="floatingInput"
          placeholder="name@example.com" value="alwin.liufandi@gmail.com" readonly>
        <label for="floatingInput" class="text-muted">Email<span class="text-danger">*</span></label>
      </div>
      <!-- akhir email -->
      <!-- button simpan perubahan data -->
      <button class="bg-dark text-white fs-vs fw-bold py-3 w-50 px-5">SIMPAN PERUBAHAN <span
          class="ms-5">---></span></button>
      <!-- akhir button simpan perubahan data -->
      <!-- ubah kata sandi -->
      <p class="fs-5 fw-bold mt-4 mb-0">KATA SANDI</p>
      <div class="text-end w-50 mb-2">
        <button id="showpassword" onclick="return false"
          class="border-0 bg-transparent mt-0 text-black fs-s fw-bold text-decoration-underline position-relative">
          <ion-icon id="icon" class="text-black fs-4 fw-bold mb-0 position-absolute" style="left: -25px;"
            name="eye-outline"></ion-icon><span id="text-show-hide">SHOW</span>
        </button>
      </div>
      <div class="form-floating w-50">
        <input type="password" class="form-control rounded-0 border border-1 border-dark w-100" id="floatingPassword"
          placeholder="Password">
        <label for="floatingPassword" class="text-muted">Kata Sandi Lama<span class="text-danger">*</span></label>
      </div>
      <div class="text-end w-50 mb-2">
        <button id="showpassword2" onclick="return false"
          class="border-0 bg-transparent mt-0 text-black fs-s fw-bold text-decoration-underline position-relative">
          <ion-icon id="icon2" class="text-black fs-4 fw-bold mb-0 position-absolute" style="left: -25px;"
            name="eye-outline"></ion-icon><span id="text-show-hide2">SHOW</span>
        </button>
      </div>
      <div class="form-floating w-50">
        <input type="password" class="form-control rounded-0 border border-1 border-dark w-100" id="floatingPassword2"
          placeholder="Password">
        <label for="floatingPassword2" class="text-muted">Konfirmasi Kata Baru<span class="text-danger">*</span></label>
      </div>
      <!-- akhir ubah kata sandi -->
      <!-- button simpan ubah sandi -->
      <button class="bg-dark text-white fs-vs fw-bold py-3 w-50 px-5 mt-3">PERBAHARUI KATA SANDI <span
          class="ms-5">---></span></button>
      <!-- akhir button simpan ubah sandi -->
    </div>
    <!-- akhir bagian kiri -->

    <!-- bagian kanan -->
    <div class="w-25">
      <a href="AkunSaya.html" class="text-black d-block mb-3 hover-black">Akun Saya</a>
      <a href="InformasiPribadi.html" class="fw-bold nav-link d-block mb-3">Informasi Pribadi</a>
      <a href="DataAlamat.html" class="text-black d-block mb-3 hover-black">Data Alamat</a>
      <a href="RiwayatPesanan.html" class="text-black d-block mb-3 hover-black">Riwayat Pesanan</a>
      <a href="wishlist.html" class="text-black d-block mb-3 hover-black">Wish List</a>
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
<script src="js/registrasi.js"></script>
@endsection