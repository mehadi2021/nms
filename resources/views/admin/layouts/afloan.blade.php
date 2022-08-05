@extends('admin.master')

@section('content')
<h2>Donation Application</h2>
<p style="text-align: left;">

</p>
<table class="table table-success table-striped table-responsive ">
  <thead>
    <tr>
        <th scope="col">SL</th>
     <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Date_of_birth</th>
      <th scope="col">Address</th>
      <th scope="col">Nid_no</th>
      <th scope="col">Institution</th>
      <th scope="col">Department</th>
      <th scope="col">Occupation</th>
      <th scope="col">Amount</th>
      <th scope="col">Cause</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($loans as $key=>$contact)
            <tr>
            <th >{{$key+1}}</th>
                <td>{{$contact->name}}</td>
                <td>{{$contact->phone}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->date_of_birth}}</td>
                <td>{{$contact->address}}</td>
                <td>{{$contact->nid_no}}</td>
                <td>{{$contact->institution}}</td>
                <td>{{$contact->department}}</td>
                <td>{{$contact->occupation}}</td>
                <td>{{$contact->amount}}</td>
                <td>{{$contact->cause}}</td>
                <td>{{$contact->status}}</td>
            </tr>
        @endforeach
  </tbody>
</table>

@endsection
