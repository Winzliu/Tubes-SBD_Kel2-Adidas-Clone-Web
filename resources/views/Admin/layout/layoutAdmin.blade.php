<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>

  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/mainpageAdmin.css') }}">
  @yield('css')

</head>

<body>
  <div class="d-flex">

    <div class="vh-100 d-flex flex-column sidebar justify-content-between p-3 pb-4">
      <ul class="mt-3 list-unstyled text-center">
        <li><a href="/admin">Home</a></li>
        <li><a href="/admin/produks">Daftar Produk</a></li>
        <li><a href="/admin/verifikasi">Verifikasi Ulasan</a></li>
        <li><a href="/admin/ukuran">Daftar Ukuran Produk</a></li>
        <li><a href="/admin/warna">Daftar Warna Produk</a></li>
      </ul>
      <form action="/admin/logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger w-50 w-100">Logout</button>
      </form>
    </div>

    <!-- main section -->
    @yield('main')
    <!-- akhir main section -->



    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js.map') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @yield('script')
</body>

</html>