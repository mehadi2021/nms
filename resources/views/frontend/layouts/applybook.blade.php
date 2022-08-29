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


<!-- scholarship -->
<section class="section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-4 mb-4 mb-md-0">
          <img class="img-fluid" src="{{url('frontend/images/scholarship/scholarship.jpg')}}" alt="scholarship news">
        </div>
        <div class="col-md-8">
          <h2 style="margin-left:190px;">Apply Book</h2>
          <strong class="mb-4 d-block"><i>





          </p>
        </div>
      </div>
      <div class="row justify-content-center">
        <!-- scholarship item -->

  @foreach ($books as $m)

        <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
            <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0">

                <span class="h3 d-block"><a href="{{route('user.view',$m->id) }}">view</a></span>
            <h5>Book name:{{$m->book_name}}</h5>
            <h4>Category:{{$m->category}}</h4>
            <h4>Writer:{{$m->writer}}</h4></div>


            <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
              <a href="notice-single.html" class="h4 mb-3 d-block">

              </a>
              <p class="mb-0">


              </p>

            </div>
            <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="{{ route('user.abook',$m->id) }}" class="btn btn-primary">Apply Now</a></div>
          </li>
  @endforeach
        <!-- scholarship item -->



      </div>
    </div>
  </section>
  <!-- /scholarship -->

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
