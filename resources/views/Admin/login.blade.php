<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Admin Adidas</title>

  <link rel="stylesheet" href={{ asset("css/bootstrap.css") }}>
  <!--custom css-->
  <link rel="stylesheet" href={{ asset("css/loginAdmin.css") }}>
</head>

<body class="bg-dark">
  <div class="global-container">
    <div class="card login-form shadow-lg bg-light">
      <div class=" mb-4">
        <h1 class="card-title text-center">L O G I N</h1>
      </div>
      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('loginError') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <div class="p-4">
        <form action="/admin/login" method="POST">
          @csrf

          {{-- username --}}
          <div class="">
            <label for="username" class="form-label fw-bold">Username</label>
            <input type="text" name="username" class="form-control bg-light @error('username') is-invalid @enderror"
              id="username" value="{{ old('username') }}">
            @error('username')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          {{-- password --}}
          <label for="password" class="form-label fw-bold">Password</label>
          <div class="d-flex position-relative">
            <input type="password" name="password"
              class=" form-control bg-light @error('password') is-invalid @enderror" id="password">
            <button id="showpassword" onclick="return false"
              class="border-0 position-absolute bg-transparent end-0 pt-2 pe-3">
              <ion-icon id="icon" class="text-black fs-4 fw-bold mb-0" name="eye-outline">
              </ion-icon>
            </button>
          </div>
          @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>

      <div class="text-center mt-5">
        <button type="submit" class="btn btn-light border-1 border border-dark px-3 fs-6">Login</button>
      </div>
      </form>
    </div>
  </div>
  </div>

  <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.js.map') }}"></script>
  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  <!-- ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <script>
    // show password
    let icon = document.getElementById('icon');
    let password = document.getElementById('password');
    let showPassword = document.getElementById('showpassword');

    showPassword.addEventListener('click', function(){
      if (password.getAttribute("type") === 'password') {
        password.setAttribute("type", "text")
        icon.setAttribute("name", "eye-off-outline")
        document.getElementById('text-show-hide').innerHTML = "HIDE"
      } else {
        password.setAttribute("type", "password")
        icon.setAttribute("name", "eye-outline")
        document.getElementById('text-show-hide').innerHTML = "SHOW"
      }
    })
  </script>
</body>

</html>