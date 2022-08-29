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
<a class="btn btn-warning" href="{{route('user.bookSector')}}">Book Sector</a>
<a class="btn btn-warning" href="{{route('user.donationSector')}}">Donation Sector</a>
<a class="btn btn-warning" href="{{route('user.loanSector')}}">Loan Sector</a>
<a class="btn btn-warning" href="{{route('user.sshipview')}}">Scholarship Section</a>
<a class="btn btn-warning" href="{{ route('user.donateSector') }}">Donate Section</a>

<br>
<br>
<h2>Donate History</h2>
<p style="text-align: left;">

</p>
<table class="table table-success table-striped ">
  <thead>
    <tr>
        <th scope="col">SL</th>
     <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Amount</th>
      <th scope="col">Transaction Id</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Type</th>
      <th scope="col">Status</th>
       <th scope="col">Total Amount</th>

         </tr>
  </thead>
  @php
      $total = 0;
  @endphp
  <tbody>

        @foreach ($donates as $key=>$donate)
        <tr>
        <th >{{$key+1}}</th>
        <td>{{$donate->name}}</td>
        <td>{{$donate->email}}</td>
        <td>{{$donate->phone}}</td>
        <td>{{$donate->amount}}</td>
        <td>{{$donate->transaction_id}}</td>
        <td>{{$donate->payment_method}}</td>
        <td>{{$donate->type}}</td>
        <td>{{$donate->status}}</td>
        <td>{{$donate->total_amount}}</td>
        </tr>

        @php
        $total = $total + $donate->amount;
    @endphp

    @endforeach


    <tr>
        <td colspan="4">Total:</td>
        <td>{{$total}} tk.</td>
    </tr>
  </tbody>
</table>

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
