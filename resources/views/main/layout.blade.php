<!doctype html>
<html lang="en">
@foreach ($setting as $set)
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{$set->title}}</title>
  <link href="{{asset('images/app/logo.png')}}" rel='shortcut icon'>
  <link rel="stylesheet" href="{{asset('admin/assets/css/styles.min.css')}}" />
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>
@endforeach
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <img src="{{asset('images/app/logo.png')}}" style="width: 50px;"> 
        <a class="navbar-brand" href="#"> {{$set->title}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" a  ria-current="page" href="/main">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" a  ria-current="page" href="/artikel">Artikel</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
        <div class="container">
         
            <main>
              <br>
                @yield('content')
            </main>
        </div>
      
    </div>

  <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('admin/assets/js/app.min.js')}}"></script>
  <script src="{{asset('admin/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('admin/assets/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script>
      $(document).ready( function () {
      $('#myTable').DataTable();
  })
  </script>
  
</body>
</html>