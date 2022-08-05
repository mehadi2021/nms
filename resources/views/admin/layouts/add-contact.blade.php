@extends('admin.master')

@section('content')
<h2>User Message</h2>
<p style="text-align: left;">

</p>
<table class="table table-success table-striped ">
  <thead>
    <tr>
        <th scope="col">SL</th>
     <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject </th>
      <th scope="col">message</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($contacts as $key=>$contact)
            <tr>
            <th >{{$key+1}}</th>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->message}}</td>
            </tr>
        @endforeach
  </tbody>
</table>

@endsection
