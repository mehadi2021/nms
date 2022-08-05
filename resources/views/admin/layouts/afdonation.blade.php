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
      <th scope="col">Phone</th>
      <th scope="col">Occupation</th>
      <th scope="col">Father_Name</th>
      <th scope="col">Father_Occupation</th>
      <th scope="col">Mother_Name</th>
      <th scope="col">Mother_Occupation</th>
      <th scope="col">Number_of_Family_Member</th>
      <th scope="col">Address</th>
      <th scope="col">Amount</th>
      <th scope="col">Description</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($donations as $key=>$contact)
            <tr>
            <th >{{$key+1}}</th>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone}}</td>
                <td>{{$contact->occupation}}</td>
                <td>{{$contact->father_name}}</td>
                <td>{{$contact->father_occupation}}</td>
                <td>{{$contact->mother_name}}</td>
                <td>{{$contact->mother_occupation}}</td>
                <td>{{$contact->number_of_family_member}}</td>
                <td>{{$contact->address}}</td>
                <td>{{$contact->amount}}</td>
                <td>{{$contact->description}}</td>

            </tr>
        @endforeach
  </tbody>
</table>

@endsection
