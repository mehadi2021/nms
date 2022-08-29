@extends('admin.master')
@section('content')

<h2>Scholarship Add</h2>
<br>

<form action="{{route('scholarship.store')}}"method="post">
    @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control"  required name="name" id="name">
      </div>
       <div class="form-group">
        <label for="list">Address:</label>
        <input type="text" class="form-control"  required name="address" id="list">
      </div>
      <div class="form-group">
        <label for="name">Contact_Number:</label>
        <input type="text" class="form-control" required  name="contact_number" id="name">
      </div>
      <div class="form-group">
        <label for="list">Institution_Name:</label>
        <input type="text" class="form-control"  required name="institution_name" id="name">
      </div>
      <div class="form-group">
        <label for="list">Scholarship_Type:</label>
        <input type="text" class="form-control"  required name="types" id="name">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
</form>



@endsection
