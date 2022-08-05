
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



   <h2><section class="section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="d-flex align-items-center section-title justify-content-between">
            <h2 class="mb-0 text-nowrap mr-3">Upcoming Events</h2>
            <div class="border-top w-100 border-primary d-none d-sm-block"></div>
            <div>
              <a href="events.html" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see all</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
    <!-- event -->
    <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
      <div class="card border-0 rounded-0 hover-shadow">
        <div class="card-img position-relative">
          <img class="card-img-top rounded-0" src="{{url('frontend/images/events/event-1.jpg')}}" alt="event thumb">
          <div class="card-date"><span>18</span><br>December</div>
        </div>
        <div class="card-body">
          <!-- location -->
          <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
          <a href="event-single.html"><h4 class="card-title">Lorem ipsum dolor amet, consectetur adipisicing.</h4></a>
        </div>
      </div>
    </div>
    <!-- event -->
    <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
      <div class="card border-0 rounded-0 hover-shadow">
        <div class="card-img position-relative">
          <img class="card-img-top rounded-0" src="{{url('frontend/images/events/event-2.jpg')}}" alt="event thumb">
          <div class="card-date"><span>21</span><br>December</div>
        </div>
        <div class="card-body">
          <!-- location -->
          <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
          <a href="event-single.html"><h4 class="card-title">Lorem ipsum dolor amet, consectetur adipisicing.</h4></a>
        </div>
      </div>
    </div>
    <!-- event -->
    <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
      <div class="card border-0 rounded-0 hover-shadow">
        <div class="card-img position-relative">
          <img class="card-img-top rounded-0" src="{{url('frontend/images/events/event-3.jpg')}}" alt="event thumb">
          <div class="card-date"><span>23</span><br>December</div>
        </div>
        <div class="card-body">
          <!-- location -->
          <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
          <a href="event-single.html"><h4 class="card-title">Lorem ipsum dolor amet, consectetur adipisicing.</h4></a>
        </div>
      </div>
    </div>
  </div>
      <!-- mobile see all button -->
      <div class="row">
        <div class="col-12 text-center">
          <a href="course.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
        </div>
      </div>
    </div>
  </section>
</h2>

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
