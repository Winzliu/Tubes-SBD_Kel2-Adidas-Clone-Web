<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Adidas Main Page</title>
  <!-- link  -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/bootstrap.css.map" />
  <link rel="stylesheet" href="css/mystyle.css" />
</head>

<body style="overflow-x: hidden">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom flex-column pb-0 fixed-top bg-white">
    <!-- bagian atas -->
    <div class="container">
      <a class="navbar-brand" href="#">Logo Adidas</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ion-icon class="ms-auto fw-bold" name="phone-portrait-outline"></ion-icon>
        <span class="navbar-text fw-bold fs-vs text-black mx-1">
          QUESTION? 021-50958329
        </span>
        <span class="navbar-text fs-vs text-black mx-1">
          Mon to Fri: 9am - 5pm
        </span>
      </div>
    </div>
    <!-- akhir bagian atas -->
    <!-- bagian bawah -->
    <div class="container mt-2">
      <div class="d-flex gap-5 justify-content-center w-100">
        @yield('navbar')
      </div>
    </div>
    <!-- akhir bagian bawah -->
  </nav>
  <!-- akhir navbar -->

  <!-- main section -->
  @yield('main')
  <!-- akhir main section -->

  <!-- footer -->
  <footer>
    <div class="bg-dark pt-2">
      <div class="d-flex justify-content-around">
        <a href="#" class="nav-link text-secondary hover-line fs-vs">Indonesia</a>
        <div class="d-flex">
          <a href="#" class="nav-link text-secondary hover-line fs-vs">Privacy Policy |
          </a>
          <a href="#" class="nav-link text-secondary hover-line fs-vs">&nbsp; Term and Conditions</a>
          <p class="text-secondary ms-3 fs-vs">© 2021 adidas Indonesia</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- akhir footer -->

  <!-- script -->
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/bootstrap.bundle.js.map"></script>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/script.js"></script>
  @yield('script')

  <!-- ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>