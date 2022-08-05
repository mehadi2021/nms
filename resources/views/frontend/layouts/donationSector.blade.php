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



<section class="section">
<h2>Donation History</h2>
<p style="text-align: left;">

</p>
<table class="table table-success table-striped ">
  <thead>
    <tr>
        <th scope="col">SL</th>
     <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Occupation</th>
      <th scope="col">Amount</th>

         </tr>
  </thead>
  @php
      $total = 0;
  @endphp
  <tbody>

        @foreach ($donations as $key=>$donation)
        <tr>
        <th >{{$key+1}}</th>
        <td>{{$donation->name}}</td>
        <td>{{$donation->email}}</td>
        <td>{{$donation->phone}}</td>
        <td>{{$donation->occupation}}</td>
        <td>{{$donation->amount}}</td>
        </tr>

        @php
        $total = $total + $donation->amount;
    @endphp

    @endforeach


    <tr>
        <td colspan="5">Total:</td>
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
