@extends('frontend.index')
@section('content')
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>EduCenter</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{url('/frontend/plugins/bootstrap/bootstrap.min.css')}}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{url('/frontend/plugins/slick/slick.css')}}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{url('/frontend/plugins/themify-icons/themify-icons.css')}}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{url('/frontend/plugins/animate/animate.css')}}">
  <!-- aos -->
  <link rel="stylesheet" href="{{url('/frontend/plugins/aos/aos.css')}}">
  <!-- venobox popup -->
  <link rel="stylesheet" href="{{url('/frontend/plugins/venobox/venobox.css')}}">

  <!-- Main Stylesheet -->
  <link href="{{url('/frontend/css/style.css')}}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{url('frontend/images/favicon.png')}}" type="image/x-icon">
  <link rel="icon" href="{{('frontend/images/favicon.png')}}" type="image/x-icon">

</head>



<section class="section" style="text-align: center;">
<h2 style="text-align: center;">Our Work</h2>
<br>
<a class="btn btn-warning" href="{{route('user.bookSector')}}">Book Sector</a>
<a class="btn btn-warning" href="{{route('user.donationSector')}}">Donation Sector</a>
<a class="btn btn-warning" href="{{route('user.loanSector')}}">Loan Sector</a>
<a class="btn btn-warning" href="{{route('user.sshipview')}}">Scholarship Section</a>
<a class="btn btn-warning" href="{{ route('user.donateSector') }}">Donate Section</a>

</section>


  <script src="{{url('/frontend/plugins/jQuery/jquery.min.js')}}"></script>
  <!-- Bootstrap JS -->
  <script src="{{url('/frontend/plugins/bootstrap/bootstrap.min.js')}}"></script>
  <!-- slick slider -->
  <script src="{{url('/frontend/plugins/slick/slick.min.js')}}"></script>
  <!-- aos -->
  <script src="{{url('/frontend/plugins/aos/aos.js')}}"></script>
  <!-- venobox popup -->
  <script src="{{url('/frontend/plugins/venobox/venobox.min.js')}}"></script>
  <!-- filter -->
  <script src="{{url('/frontend/plugins/filterizr/jquery.filterizr.min.js')}}"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
  <script src="{{url('/frontend/plugins/google-map/gmap.js')}}"></script>

  <!-- Main Script -->
  <script src="{{url('/frontend/js/script.js')}}"></script>

  </body>
  </html>
@endsection
