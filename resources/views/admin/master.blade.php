<h1><!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>NGO Managment System</title>
  <!-- Favicon -->
  <link rel="icon" href="{{url('assets/img/brand/favicon.png')}}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{url('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{url('assets/css/argon.css?v=1.2.0" type="text/css')}}">
</head>

<body>
  <!-- Sidenav -->

@include('admin.partials.sidenav')

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
@include('admin.partials.topnav')

    <!-- Header -->
    <!-- Header -->

{{-- @include('admin.partials.dash') --}}

    <!-- Page content -->
    <div style="margin:80px;">
    @yield('content')
    </div>
      <!-- Footer -->

      @include('admin.partials.footer')

    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{url('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{url('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{url('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{url('assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{url('assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{url('assets/js/argon.js?v=1.2.0')}}"></script>
    @yield('scripts')
</body>

</html>
