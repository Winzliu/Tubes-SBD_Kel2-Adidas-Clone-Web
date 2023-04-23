@extends('layouts.layoutIndex')

@section('main')
<div class="mt-7 container">
  <div class="d-flex justify-content-center">
    <!-- sisi kiri -->
    <div class="my-5">
      <p class="fw-bold fs-3">Tambah Alamat Baru</p>
      <p class="fw-bold fs-5 mb-0">Informasi Kontak</p>
      <form action="/tambahalamat" method="POST">
        @csrf
        <!-- Informasi Kontak -->
        <div class="d-flex gap-3">
          <!-- nama depan -->
          <div class="form-floating mb-3">
            <input type="text" name="namaDepan" value="{{ @old('namaDepan') }}" class=" form-control rounded-0 p-2
              border-dark @error('namaDepan') is-invalid @enderror" style="height: 50px; width: 250px" id="namaDepan"
              placeholder="name@example.com" />
            <label for="namaDepan" class="p-2 fs-s">Nama Depan <span class="text-danger">*</span></label>
            @error('namaDepan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <!-- akhir nama depan -->
          <!-- nama belakang -->
          <div class="form-floating mb-3">
            <input type="text" value="{{ @old('namaBelakang') }}" name="namaBelakang"
              class="form-control rounded-0 p-2 border-dark @error('namaBelakang') is-invalid @enderror"
              style="height: 50px; width: 250px" id="namaBelakang" placeholder="name@example.com" />
            <label for="namaBelakang" class="p-2 fs-s">Nama Belakang <span class="text-danger">*</span></label>
            @error('kodePos')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <!-- akhir nama belakang -->
        </div>
        <!-- nomor telepon -->
        <div class="form-floating mb-3">
          <input type="text" value="{{ @old('nomorTelepon') }}" name="nomorTelepon"
            class="form-control rounded-0 p-2 border-dark @error('nomorTelepon') is-invalid @enderror"
            style="height: 50px; width: 250px" id="nomorTelepon" placeholder="name@example.com" />
          <label for="nomorTelepon" class="p-2 fs-s">Nomor Telepon <span class="text-danger">*</span></label>
          @error('nomorTelepon')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <!-- akhir nomor telepon -->
        <!-- akhir informasi kontak -->
        <!-- Alamat -->
        <p class="fw-bold fs-5 mb-0">Alamat</p>
        <!-- nama jalan -->
        <div class="form-floating mb-3">
          <input type="text" value="{{ @old('namaJalan') }}" name="namaJalan"
            class="form-control rounded-0 p-2 border-dark w-100 @error('namaJalan') is-invalid @enderror"
            style="height: 50px" id="namaJalan" placeholder="name@example.com" />
          <label for="namaJalan" class="p-2 fs-s">Nama jalan <span class="text-danger">*</span></label>
          @error('namaJalan')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <!-- akhir nama jalan -->
        <div class="d-flex gap-3">
          <!-- negara -->
          <div class="w-50">
            <select name="negara" class="form-select border-dark rounded-0" aria-label="Default select example">
              <option selected value="Indonesia">Indonesia</option>
            </select>
          </div>
          <!-- akhir negara -->
          <!-- provinsi -->
          <div class="w-50">
            <select class="form-select border-dark rounded-0 @error('provinsi') is-invalid @enderror"
              aria-label="Default select example" name="provinsi" id="provinsi">
              <option selected disabled>Provinsi</option>
            </select>
            @error('provinsi')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <!-- akhir provinsi -->
        </div>
        <div class="d-flex gap-3 my-3">
          <!-- kabupaten/kota -->
          <div class="w-50">
            <select class="form-select border-dark rounded-0 @error('kota') is-invalid @enderror"
              aria-label="Default select example" name="kota" id="kota">
              <option selected disabled>Kota</option>
            </select>
            @error('kota')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <!-- akhir kabupaten/kota -->
          <!-- kecamatan -->
          <div class="w-50">
            <select class="form-select border-dark rounded-0 @error('kecamatan') is-invalid @enderror"
              aria-label="Default select example" name="kecamatan" id="kecamatan">
              <option selected>Kecamatan</option>
            </select>
            @error('kecamatan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <!-- akhir kecamatan -->
        </div>
        <div class="d-flex gap-3 my-3">
          <div class="w-50">
            <!-- kelurahan -->
            <select class="form-select border-dark rounded-0  @error('kelurahan') is-invalid @enderror"
              style="height: 40px" aria-label="Default select example" name="kelurahan" id="kelurahan">
              <option selected disabled>Kelurahan</option>
            </select>
            @error('kelurahan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <!-- akhir kelurahan -->
          <!-- kode pos -->
          <div class="form-floating mb-3 w-50">
            <input type="text" value="{{ @old('kodePos') }}" name="kodePos"
              class="form-control rounded-0 p-2 border-dark w-100 @error('kodePos') is-invalid @enderror"
              style="height: 50px" id="kodePos" placeholder="name@example.com" />
            <label for="kodePos" class="p-2 fs-s">Kode Pos <span class="text-danger">*</span></label>
            @error('kodePos')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <!-- akhir kode pos -->
        </div>
        <!-- akhir alamat -->
        <!-- button -->
        <button type="submit" class="bg-black rounded-0 fw-bold text-white py-3 px-5">
          Simpan Alamat
        </button>
        <!-- akhir button -->
      </form>
    </div>
    <!-- akhir sisi kiri -->
  </div>
</div>
@endsection

@section('script')
<script src="js/AkunSaya.js"></script>
<!-- mengambil data provinsi -->
<script>
  fetch(
      `https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json`
    )
      .then((response) => response.json())
      .then((provinces) => {
        let data = provinces;
        let tampung = "<option selected disabled>Provinsi</option>";
        document.getElementById("provinsi").innerHTML =
          "<option selected disabled>Provinsi</option>";
        document.getElementById("kecamatan").innerHTML =
          "<option selected disabled>Kecamatan</option>";
        document.getElementById("kelurahan").innerHTML =
          "<option selected disabled>Kelurahan</option>";
        data.forEach((el) => {
          tampung += `<option data-reg="${el.id}" value="${el.name}">${el.name}</option>`;
        });
        document.getElementById("provinsi").innerHTML = tampung;
      });
</script>
<!-- akhir mengambil data provinsi -->

<!-- mengambil data kabupaten/kota -->
<script>
  const selectedProvinsi = document.getElementById("provinsi");

    selectedProvinsi.addEventListener("change", (e) => {
      let provinsi = e.target.options[e.target.selectedIndex].dataset.reg;
      fetch(
        `https://kanglerian.github.io/api-wilayah-indonesia/api/regencies/${provinsi}.json`
      )
        .then((response) => response.json())
        .then((regencies) => {
          let data = regencies;
          let tampung = "<option selected disabled>Kota</option>";
          document.getElementById("kota").innerHTML =
            "<option selected disabled>Kota</option>";
          document.getElementById("kecamatan").innerHTML =
            "<option selected disabled>Kecamatan</option>";
          document.getElementById("kelurahan").innerHTML =
            "<option selected disabled>Kelurahan</option>";
          data.forEach((el) => {
            tampung += `<option data-reg="${el.id}" value="${el.name}">${el.name}</option>`;
          });
          document.getElementById("kota").innerHTML = tampung;
        });
    });
</script>
<!-- akhir mengambil data kabupaten/kota -->

<!-- mengambil data kecamatan -->
<script>
  const selectedKota = document.getElementById("kota");

    selectedKota.addEventListener("change", (e) => {
      let kota = e.target.options[e.target.selectedIndex].dataset.reg;
      fetch(
        `https://kanglerian.github.io/api-wilayah-indonesia/api/districts/${kota}.json`
      )
        .then((response) => response.json())
        .then((districts) => {
          let data = districts;
          let tampung = "<option selected disabled>Kecamatan</option>";
          document.getElementById("kecamatan").innerHTML =
            "<option selected disabled>Kecamatan</option>";
          document.getElementById("kelurahan").innerHTML =
            "<option selected disabled>Kelurahan</option>";
          data.forEach((el) => {
            tampung += `<option data-reg="${el.id}" value="${el.name}">${el.name}</option>`;
          });
          document.getElementById("kecamatan").innerHTML = tampung;
        });
    });
</script>
<!-- akhir mengambil data kecamatan -->

<!-- mengambil data kelurahan -->
<script>
  const selectedKecamatan = document.getElementById("kecamatan");

    selectedKecamatan.addEventListener("change", (e) => {
      let kecamatan = e.target.options[e.target.selectedIndex].dataset.reg;
      fetch(
        `https://kanglerian.github.io/api-wilayah-indonesia/api/villages/${kecamatan}.json`
      )
        .then((response) => response.json())
        .then((villages) => {
          let data = villages;
          let tampung = "<option selected disabled>Kelurahan</option>";
          document.getElementById("kelurahan").innerHTML =
            "<option selected disabled>Kelurahan</option>";
          data.forEach((el) => {
            tampung += `<option data-reg="${el.id}" value="${el.name}">${el.name}</option>`;
          });
          document.getElementById("kelurahan").innerHTML = tampung;
        });
    });
</script>
<!-- akhir mengambil data kelurahan -->
@endsection