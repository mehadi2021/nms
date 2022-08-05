@extends('admin.master')


@section('content')

  <form class="needs-validation" action="{{route('admin.layouts.note.update',$notes->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')


     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Notice</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>

      <div class="mb-3 form-group">
        <label for="validationCustom01">Notice</label>
        <input type="text" name="notice" class="form-control" id="validationCustom01" value="{{$notes->notice}}"placeholder="name" required>
     </div>


      <button type="submit">submit</button>


  </form>

  @endsection
