@extends('admin.master')

@section('content')
<h2>Donation Application</h2>
<p style="text-align: left;">

</p>
<table class="table table-success table-striped ">
  <thead>
    <tr>
        <th scope="col">SL</th>
     <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Book_Name</th>
      <th scope="col">Writer</th>


    </tr>
  </thead>
  <tbody>
  @foreach ($books as $key=>$contact)
            <tr>
            <th >{{$key+1}}</th>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->book_name}}</td>
                <td>{{$contact->Writer}}</td>


            </tr>
        @endforeach
  </tbody>
</table>

@endsection
