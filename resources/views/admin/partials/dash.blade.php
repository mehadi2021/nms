

@extends('admin.master')


@section('content')

<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">

            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">

          </div>
        </div>
        <!-- Card stats -->
        <div class="row">



          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0"><a href="{{route('admin.amount')}}">Donation Amount</h5>
                    <span class="h2 font-weight-bold mb-0"></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>


          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0"><a href="{{route('admin.message')}}">Messages</a></h5>
                    <span class="h2 font-weight-bold mb-0"></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>




          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0"><a href="{{route('admin.loan')}}">Application For Loan</h5>
                    <span class="h2 font-weight-bold mb-0"></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0"><a href="{{route('admin.book')}}">Application For Book</a></h5>
                    <span class="h2 font-weight-bold mb-0"></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>


          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0"><a href="{{route('admin.adonation')}}">Application For Donation</h5>
                    <span class="h2 font-weight-bold mb-0"></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>




  </div>
@endsection
