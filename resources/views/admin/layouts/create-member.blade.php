@extends('admin.master')


@section('content')

<h1>Create an Member</h1>


<form action="{{route('admin.member.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input name="name" placeholder="Enter  Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">email</label>
        <input name="email" placeholder="Enter  email"  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">address</label>
        <input name="address" placeholder="Enter  address"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>



    <button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection
