<!DOCTYPE html>
<html lang="en">
 @foreach ($setting as $set)
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{$set->title}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('images/app/logo.png')}}" rel='shortcut icon'>
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('scaffold/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('scaffold/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('scaffold/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('scaffold/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('scaffold/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('scaffold/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

  <!-- Template Main CSS File -->
  <link href="{{asset('scaffold/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Scaffold
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
@endforeach
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
   <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <img src="{{asset('images/app/logo.png')}}" style="width: 50px;">
      <div class="logo me-auto">
        <h1><a href="/main">{{$set->title}}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="/main">Beranda</a></li>
          <li><a class="nav-link scrollto" href="/artikel">Artikel</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a link href="https://twitter.com"><i class="bi bi-twitter-x"></i></a>
        <a link href="https://facebook.com"><i class="bi bi-facebook"></i></a>
        <a link href="https://instagram.com"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header><!-- End Header -->
        <div class="container">
         
            <main>
                @yield('content')
            </main>
        </div>
        <div class="py-3 px-3 text-center">
          <p class="mb-0 fs-6"><a href="/main" class="pe-1 text-primary text-decoration-underline">{{$set->title}}</a> Developed by <a class="pe-1 text-primary text-decoration-underline">Arnoriel</a></p>
          <p class="mb-0 fs-6"> Copyright. © 2023</p>
        </div>
    </div>

  <!-- Vendor JS Files -->
  <script src="{{asset('scaffold/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('scaffold/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('scaffold/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('scaffold/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('scaffold/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('scaffold/assets/vendor/php-email-form/validate.js')}}"></script>
  
  <!-- Template Main JS File -->
  <script src="{{asset('scaffold/assets/js/main.js')}}"></script>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script>
      $(document).ready( function () {
      $('#myTable').DataTable();
  })
  </script>
  
</body>
</html>