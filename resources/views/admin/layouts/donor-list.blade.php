@extends('admin.master')

@section('content')
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
      <th scope="col">Current Donation</th>
      <th scope="col">Total Donation</th>
         </tr>
  </thead>
  <tbody>

        @foreach ($donar as $key=>$donat)
        <tr>
        <th >{{$key+1}}</th>
        <td>{{$donat->name}}</td>
        <td>{{$donat->email}}</td>
        <td>{{$donat->phone}}</td>
        <td>{{$donat->amount}}</td>
        <td>{{$donat->total_amount}}</td>
        </tr>
    @endforeach
  </tbody>
</table>

@endsection
