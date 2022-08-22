@extends('frontend.index')
@section('content')
<h5 style="text-align: center;">Information Details</h5>
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


