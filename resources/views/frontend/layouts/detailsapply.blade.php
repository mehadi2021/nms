@extends('frontend.index')
@section('content')
<section class="section" style="text-align: center;">
<a class="btn btn-warning" href="{{route('user.bookSector')}}">Book Sector</a>
<a class="btn btn-warning" href="{{route('user.donationSector')}}">Donation Sector</a>
<a class="btn btn-warning" href="{{route('user.loanSector')}}">Loan Sector</a>
<a class="btn btn-warning" href="{{route('user.sshipview')}}">Scholarship Section</a>
<a class="btn btn-warning" href="{{ route('user.donateSector') }}">Donate Section</a>

<br>
<br>
<br>
<h2 style="text-align: center;">Scholarship Details</h2>
<br>
<br>
<table class="table table-success table-striped ">
  <thead>
    <tr>
        <th scope="col">SL</th>
     <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
      <th scope="col">Status</th>


    </tr>
  </thead>
  <tbody>
@foreach ($data as $key=>$datas )
            <tr>
            <th >{{$key+1}}</th>
                <td>{{$datas->name}}</td>
                <td>{{$datas->email}}</td>
                <td>{{$datas->subject}}</td>
                <td>{{$datas->message}}</td>
                <td>{{$datas->status}}</td>
            </tr>
  </tbody>
@endforeach
@endsection


