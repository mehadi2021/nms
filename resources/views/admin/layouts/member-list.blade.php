@extends('admin.master')


@section('content')
    <h1>Member List</h1>
<form action="{{route('admin.member.list')}}"method="GET">
</form>


    <a href="{{route('admin.member.create')}} "class="btn btn-success">Create a Member</a>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($members as $key=>$member)
                <tr>
                    <th>{{$key+1}}</th>
                    <td>{{$member->name}}</td>
                    <td>{{$member->email}}</td>
                    <td>{{$member->address}}</td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
