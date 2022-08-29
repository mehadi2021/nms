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


@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<section class="section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="section-title">Apply For Book</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7 mb-4 mb-lg-0">

            <form action="{{route('user.abook.store')}}" method="post">

              @csrf

 <label for="exampleFormControlSelect1">Name</label>
                <input type="text"  class="form-control mb-3" id="name" name="name" value="{{ auth()->user()->name
                 }}">
                  <label for="exampleFormControlSelect1">Email</label>
            <input type="email" class="form-control mb-3" id="mail" name="email" placeholder="Email">
            {{-- <input type="text" class="form-control mb-3" id="subject" name="book_name" placeholder="Book_Name"> --}}
             <div class="form-group">
                <label for="exampleFormControlSelect1">Book Name</label>

 <select name="booklist_id" class="form-control" id="exampleFormControlSelect1">
         <option value="">select option</option>
      @foreach ($book as $books )

                  <option value="{{$books->id}}">{{$books->book_name}}</option>
                   @endforeach
                </select>

              </div>



            {{-- <input type="text" class="form-control mb-3" id="subject" name="writer" placeholder="Writer"> --}}
            <div class="form-group">
                <label for="exampleFormControlSelect1">Writer Name</label>

<select name="writer" class="form-control" id="exampleFormControlSelect1">
     <option value="">select option</option>
    @foreach ($book as $books )

                  <option value="{{ $books->writer }}">{{ $books->writer }}</option>

                  @endforeach
                </select>

              </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1">Payment Method</label>
 <select name="method" class="form-control" id="exampleFormControlSelect1">
                  <option>bKash</option>
                  <option>Rocket</option>
                  <option>MCash</option>
                  <option>OK_Wallet</option>
                  <option>SureCash</option>
                </select>
              </div>
               <div class="form-group">
                <label for="exampleFormControlSelect1">Transaction NUmber</label>
                 <input type="text" name="transaction" class="form-control mb-3" id="subject"  placeholder="Transaction Number">
               </div>


            <button type="submit" value="send" class="btn btn-primary">Submit</button>

          </form>
        </div>


      </div>
    </div>
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


