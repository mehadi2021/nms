<header class="fixed-top header">
    <!-- top header -->
    <div class="top-header py-2 bg-white">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-4 text-center text-lg-left">
            <a class="text-color mr-3" href="callto:+443003030266"><strong>CALL</strong> 014003432451</a>
            <ul class="list-inline d-inline">

            </ul>
          </div>
          <div class="col-lg-8 text-center text-lg-right">
            <ul class="list-inline">

              <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="{{route('user.notice')}}">notice</a></li>
             {{-- <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="{{route('user.sshipview')}}">SCHOLARSHIP VIEW</a></li> --}}
             @if(auth()->user())
               <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="">{{ auth()->user()->name }}</a></li>
               <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="{{route('user.profile',auth()->User()->id)}}">Profile</a>
               </li>
                 <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="{{route('user.logout')}}">Logout</a></li>
              @else
              <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#login">login</a></li>
              <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#registration">register</a></li>
              @endif
            </ul>

          </div>

        </div>
      </div>
    </div>


    <!-- navbar -->
    <div class="navigation w-100">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
          <a class="navbar-brand" href="index.html"><img src="{{url('frontend/images/logo.png')}}" alt="logo"></a>
          <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto text-center">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('user')}}">Home</a>
              </li>
              <li class="nav-item @@about">
                <a class="nav-link" href="{{route('user.about')}}">About</a>
              </li>

              <li class="nav-item @@contact">
                <a class="nav-link" href="{{route('user.contact')}}">CONTACT</a>
              </li>

              <li class="nav-item @@contact">
                <a class="nav-link" href="{{route('user.donatehere')}}">Donate Here</a>
              </li>
                <li class="nav-item @@contact">
                <a class="nav-link" href="{{route('user.ourWork')}}">Apply details</a>
              </li>

            </ul>
          </div>
        </nav>
      </div>


    </div>

  </header>















<!-- Modal -->
<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('user.registration')}}" method="post">
            @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registration Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Enter User Name:</label>
                    <input name="name" type="text" class="form-control" placeholder="Enter user name">
                </div>
                <div class="form-group">
                    <label for="">Enter User Email:</label>
                    <input name="email" type="email" class="form-control" placeholder="Enter user email">
                </div>
                <div class="form-group">
                    <label for="">Enter User Password:</label>
                    <input name="password" type="password" class="form-control" placeholder="Enter user password">
                </div>
                <div class="form-group">
                    <label for="">Enter User Mobile:</label>
                    <input name="mobile" type="text" class="form-control" placeholder="Enter user mobile">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Registration</button>
            </div>
        </div>
        </form>
    </div>
</div>




<!-- Login Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('user.login')}}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="">Enter User Email:</label>
                        <input name="email" type="email" class="form-control" placeholder="Enter user email">
                    </div>
                    <div class="form-group">
                        <label for="">Enter User Password:</label>
                        <input name="password" type="password" class="form-control" placeholder="Enter user password">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>












