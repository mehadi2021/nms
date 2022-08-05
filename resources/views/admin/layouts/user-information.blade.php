@extends('admin.master')

@section('content')

    <h1>User Informatin</h1>

    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Donar Name</th>
        <th scope="col">Address</th>
        <th scope="col">Occupation</th>
        <th scope="col">Contract Number</th>
    </tr>
    </thead>
    <tbody>
        @foreach($lists as $key=>$list)
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$list->dname}}</td>
        <td>{{$list->address}}</td>
        <td>{{$list->occupation}}</td>
        <td>{{$list->contact}}</td>
    </tr>
@endforeach

    </tbody>
</table>
@endsection
