@extends('layouts.layoutIndex')

@section('main')
<div class="position-relative mt-7 px-5 me-5 pb-2">
  <div class=" me-5 pe-5 d-flex gap-5">
    <!-- sisi kiri -->
    <div class="ms-4 w-43">
      <p class="fw-bold fs-b mb-0">REGISTRASI</p>
      <form action="/registrasi" method="POST">
        @csrf
        <!-- Nama -->
        <p class="fs-5 fw-bold">NAMA ANDA</p>
        <div class="form-floating mb-3">
          <input type="text" name="namaDepan" value="{{ @old('namaDepan') }}"
            class="form-control rounded-0 border border-1 border-dark w-100 @error('namaDepan') is-invalid @enderror"
            id="namaDepan" placeholder="name@example.com">
          <label for="namaDepan" class="text-muted">Nama Depan<span class="text-danger">*</span></label>
          @error('namaDepan')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="namaBelakang" value="{{ @old('namaBelakang') }}"
            class="form-control rounded-0 border border-1 border-dark w-100 @error('namaBelakang') is-invalid @enderror"
            id="namaBelakang" placeholder="name@example.com">
          <label for="namaBelakang" class="text-muted">Nama Belakang<span class="text-danger">*</span></label>
          @error('namaBelakang')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="nomorTelepon" value="{{ @old('nomorTelepon') }}"
            class="form-control rounded-0 border border-1 border-dark w-100 @error('nomorTelepon') is-invalid @enderror"
            id="nomorTelepon" placeholder="name@example.com">
          <label for="nomorTelepon" class="text-muted">Nomor Telepon<span class="text-danger">*</span></label>
          @error('nomorTelepon')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <!-- akhir nama -->

        <!-- tanggal lahir -->
        <p class="fs-5 fw-bold">TANGGAL LAHIR</p>
        <input type="date" name="tanggalLahir" id="tanggalLahir" value="{{ @old('tanggalLahir') }}"
          class="form-control my-3 border-dark rounded-0 @error('tanggalLahir') is-invalid @enderror"
          style="height: 50px;">
        @error('tanggalLahir')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        <!-- akhir tanggal lahir -->

        <!-- gander -->
        <p class="fs-5 fw-bold">GENDER (OPSIONAL)</p>
        <div class="d-flex gap-4">
          <div class="form-check">
            <input class="form-check-input" value="pria" type="radio" name="gender" id="pria" @if(old('gender')=='pria'
              ) checked @endif>
            <label class="form-check-label fs-6" for="pria">
              Pria
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" value="wanita" type="radio" name="gender" id="wanita"
              @if(old('gender')=='wanita' ) checked @endif>
            <label class="form-check-label fs-6" for="wanita">
              Wanita
            </label>
          </div>
        </div>
        @error('gender')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <!-- akhir gender -->

        <!-- detail masuk -->
        <p class="fs-5 fw-bold mt-3">DETAIL MASUK</p>
        <div class="form-floating">
          <input type="email" name="email"
            class="form-control rounded-0 border border-1 border-dark w-100 @error('email') is-invalid @enderror"
            id="email" placeholder="name@example.com" value="{{ @old('email') }}">
          <label for=" email" class="text-muted">Email<span class="text-danger">*</span></label>
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
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="text-end py-2">
          <button id="showpassword2" onclick="return false"
            class="border-0 bg-transparent mt-0 text-black fs-s fw-bold text-decoration-underline position-relative">
            <ion-icon id="icon2" class="text-black fs-4 fw-bold mb-0 position-absolute" style="left: -25px;"
              name="eye-outline"></ion-icon><span id="text-show-hide2">SHOW</span>
          </button>
        </div>
        <div class="form-floating">
          <input type="password" name="konfirmasiPassword"
            class="form-control rounded-0 border border-1 border-dark w-100 @error('konfirmasiPassword') is-invalid @enderror"
            id="konfirmasiPassword" placeholder="Password">
          <label for="konfirmasiPassword" class="text-muted">Konfirmasi Kata Sandi<span
              class="text-danger">*</span></label>
          @error('konfirmasiPassword')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <!-- akhir detail masuk -->

        {{-- button kirim --}}
        <button id="button-kirim" class="button-59 mt-3 m-auto" role="button" type="submit">SHaa</button>
        {{-- akhir button kirim --}}
        <p class="text-danger fs-vs fw-bold">SILAHKAN CHECKLIST CHECKBOX DIBAWAH TERLEBIH DAHULU!!!</p>
        <!-- ketentuan -->
        <p class="my-3 text-muted fs-s">Dengan mengeklik “KIRIM”, saya setuju untuk terikat dengan adidas <a href="#"
            class="text-black hover-black text-decoration-underline">Syarat dan Ketentuan</a> (karena mungkin diperbarui
          dari waktu ke waktu), dan adidas <a href="#" class="text-black hover-black text-decoration-underline">Catatan
            Privasi</a> </p>
        <p>ATAU</p>
        <!-- akhir ketentuan -->
        <!-- login cara lain -->
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
        <!-- akhir login cara lain -->

        <!-- pesan email -->
        <p class="text-muted fs-6 fw-bold mt-5">PESAN PEMASARAN EMAIL</p>
        <p class="text-muted fs-vs">Pengunaan Data Pribadi untuk Tujuan Pemasaran oleh adidas. Saya memahami bahwa
          adidas akan menggunakan data pribadi saya untuk tujuan pemasaran dan promosi seperti yang diatur dalam
          Kebijakan <a href="#" class="text-black hover-black text-decoration-underline"> Kebijakan Privasi</a> .
          Selanjutnya saya memahami bahwa alamat email saya, dan data pribadi lainnya yang diberikan akan digunakan
          untuk mengirimkan informasi tentang merek adidas dan produknya kepada saya melalui pemberitahuan dalam
          aplikasi dan pesan pemasaran email ke email yang diberikan untuk membuat akun ini. Saya mengetahui bahwa saya
          dapat menggunakan hak saya untuk menolak penggunaan data pribadi saya dan pengiriman email pemasaran tersebut
          kapan saja dengan menggunakan tombol berhenti berlangganan di semua komunikasi email, atau mengubah preferensi
          komunikasi pemasaran saya dengan masuk ke profil saya, atau menghubungi Layanan Pelanggan adidas untuk
          mendapatkan dukungan.</p>
        <!-- akhir pesan email -->

        <!-- checkbox -->
        <div class="form-check ps-4 ms-3 mb-4">
          <input class="@error('checkbox') is-invalid @enderror" type="checkbox" id="checkbox-setuju" name="checkbox">
          <label class="form-check-label fs-s text-muted d-block" style="text-indent: -35px;" for="checkbox-setuju">
            Dengan mengeklik tombol "KIRIM", Saya setuju untuk menerima info tentang adidas melalui email, sms, atau
            telepon. Lihat...kami <a href="#" class="text-black hover-black text-decoration-underline"> Kebijakan
              Privasi</a> untuk infomasi lebih lanjut. Saya setuju untuk menerima pesan pemasaran melalui email
            personalisasi dari adidas Indonesia.
          </label>
          @error('checkbox')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <!-- akhir checkbox -->
      </form>

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
    </div>
    <!-- akhir sisi kanan -->
  </div>
</div>
@endsection

@section('script')
<script src="js/registrasi.js"></script>
{{-- <script>
  function buttonready(){
    if(document.getElementById('checkbox-setuju').checked){
      document.getElementById('button-kirim').removeAttribute('disabled')
    }else{
      document.getElementById('button-kirim').setAttribute('disabled', true)
    }
  }
</script> --}}
@endsection