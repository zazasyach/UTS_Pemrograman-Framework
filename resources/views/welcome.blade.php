<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Ente</title>
    <link rel="stylesheet" href="/css/main.css">
    @vite('resources/sass/app.scss')
</head>

<body class="index-page">

      <!-- <div class="container text-center my-5">
          <h1 class="mb-4">Belajar Controller & View pada Laravel</h1>
          {{-- Contoh cara mereferensikan gambar di dalam file blade dengan menggunakan pendekatan Vite --}}
          <img class="img-thumbnail" src="{{ Vite::asset('resources/images/laravel.png') }}" alt="image">

          <div class="col-md-2 offset-md-5 mt-4">
              <div class="d-grid gap-2">
                  <a class="btn btn-dark" href="{{ route('home') }}">Home</a>
              </div>
          </div>
      </div> -->

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a class="logo  me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="fw-bold">Toko Ente</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ route('home') }}">Coba Disini!</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 class="">Membantu Mengelolah Suatu Stock di Toko Ente</h1>
            <p class="">Anda Mumet dan Males?? Pakai Web ini ajaa...</p>
            <div class="d-flex">
              <a href="{{ route('home') }}" class="btn-get-started">Coba Disini!</a>

            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="{{ Vite::asset('resources/images/hero-img.png') }}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients 2 Section -->



        </div>

      </div>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>


  <!-- Main JS File -->
  <script src="js/main.js"></script>

    @vite('resources/js/app.js')
</body>

</html>
