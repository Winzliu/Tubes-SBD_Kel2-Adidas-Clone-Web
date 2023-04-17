@extends('layouts.layoutIndex')

@section('main')
<div class="mt-7 container">
  <div class="d-flex justify-content-center">
    <!-- sisi kiri -->
    <div class="my-5">
      <p class="fw-bold fs-3">Tambah Alamat Baru</p>
      <p class="fw-bold fs-5 mb-0">Informasi Kontak</p>
      <form action="">
        <!-- Informasi Kontak -->
        <div class="d-flex gap-3">
          <!-- nama depan -->
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-0 p-2 border-dark" style="height: 50px; width: 250px"
              id="floatingInput" placeholder="name@example.com" />
            <label for="floatingInput" class="p-2 fs-s">Nama Depan <span class="text-danger">*</span></label>
          </div>
          <!-- akhir nama depan -->
          <!-- nama belakang -->
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-0 p-2 border-dark" style="height: 50px; width: 250px"
              id="floatingInput" placeholder="name@example.com" />
            <label for="floatingInput" class="p-2 fs-s">Nama Belakang <span class="text-danger">*</span></label>
          </div>
          <!-- akhir nama belakang -->
        </div>
        <!-- nomor telepon -->
        <div class="form-floating mb-3">
          <input type="text" class="form-control rounded-0 p-2 border-dark" style="height: 50px; width: 250px"
            id="floatingInput" placeholder="name@example.com" />
          <label for="floatingInput" class="p-2 fs-s">Nomor Telepon <span class="text-danger">*</span></label>
        </div>
        <!-- akhir nomor telepon -->
        <!-- akhir informasi kontak -->
        <!-- Alamat -->
        <p class="fw-bold fs-5 mb-0">Alamat</p>
        <!-- nama jalan -->
        <div class="form-floating mb-3">
          <input type="text" class="form-control rounded-0 p-2 border-dark w-100" style="height: 50px"
            id="floatingInput" placeholder="name@example.com" />
          <label for="floatingInput" class="p-2 fs-s">Nama jalan <span class="text-danger">*</span></label>
        </div>
        <!-- akhir nama jalan -->
        <div class="d-flex gap-3">
          <!-- negara -->
          <select class="form-select border-dark rounded-0" aria-label="Default select example">
            <option selected value="Indonesia">Indonesia</option>
          </select>
          <!-- akhir negara -->
          <!-- provinsi -->
          <select class="form-select border-dark rounded-0" aria-label="Default select example" name="provinsi"
            id="provinsi">
            <option selected>Provinsi</option>
          </select>
          <!-- akhir provinsi -->
        </div>
        <div class="d-flex gap-3 my-3">
          <!-- kabupaten/kota -->
          <select class="form-select border-dark rounded-0" aria-label="Default select example" name="kota" id="kota">
            <option selected value="Indonesia">Kota</option>
          </select>
          <!-- akhir kabupaten/kota -->
          <!-- kecamatan -->
          <select class="form-select border-dark rounded-0" aria-label="Default select example" name="kecamatan"
            id="kecamatan">
            <option selected>Kecamatan</option>
          </select>
          <!-- akhir kecamatan -->
        </div>
        <div class="d-flex gap-3 my-3">
          <!-- kelurahan -->
          <select class="form-select border-dark rounded-0 w-50" style="height: 40px"
            aria-label="Default select example" name="kelurahan" id="kelurahan">
            <option selected value="Indonesia">Kelurahan</option>
          </select>
          <!-- akhir kelurahan -->
          <!-- kode pos -->
          <div class="form-floating mb-3 w-50">
            <input type="text" class="form-control rounded-0 p-2 border-dark w-100" style="height: 50px"
              id="floatingInput" placeholder="name@example.com" />
            <label for="floatingInput" class="p-2 fs-s">Kode Pos <span class="text-danger">*</span></label>
          </div>
          <!-- akhir kode pos -->
        </div>
        <!-- akhir alamat -->
        <!-- button -->
        <button class="bg-black rounded-0 fw-bold text-white py-3 px-5">
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
        let tampung = "<option selected>Provinsi</option>";
        document.getElementById("provinsi").innerHTML =
          "<option selected>Provinsi</option>";
        document.getElementById("kecamatan").innerHTML =
          "<option selected>Kecamatan</option>";
        document.getElementById("kelurahan").innerHTML =
          "<option selected>Kelurahan</option>";
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
          let tampung = "<option selected>Kota</option>";
          document.getElementById("kota").innerHTML =
            "<option selected>Kota</option>";
          document.getElementById("kecamatan").innerHTML =
            "<option selected>Kecamatan</option>";
          document.getElementById("kelurahan").innerHTML =
            "<option selected>Kelurahan</option>";
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
          let tampung = "<option selected>Kecamatan</option>";
          document.getElementById("kecamatan").innerHTML =
            "<option selected>Kecamatan</option>";
          document.getElementById("kelurahan").innerHTML =
            "<option selected>Kelurahan</option>";
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
          let tampung = "<option selected>Kelurahan</option>";
          document.getElementById("kelurahan").innerHTML =
            "<option selected>Kelurahan</option>";
          data.forEach((el) => {
            tampung += `<option data-reg="${el.id}" value="${el.name}">${el.name}</option>`;
          });
          document.getElementById("kelurahan").innerHTML = tampung;
        });
    });
</script>
<!-- akhir mengambil data kelurahan -->
@endsection