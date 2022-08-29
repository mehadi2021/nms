@extends('admin.master')


@section('content')
<h1 class="display-4">All Book List</h1>

<br>
<!-- Button trigger modal -->
<a href="{{route('bookForm')}}"> <button type="button" class="btn mt-3 mx-3 text-white fw-bold bg-primary" style=" height:50px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add New Book
  </button></a><br>
<br>

<form action="{{route('allBook')}}" method="get" enctype="multipart/form-data">

<div class="input-group rounded mt-3 mb-2">
  <div class="form-outline">
    {{-- <input value="{{$key}}" type="text" placeholder="Search" name="search" class="form-control"> --}}
    <input type="text" value="{{$key}}" id="form1" class="form-control" name="search" placeholder="Search" arial-label="Search" aria-describedby="search-addon" />
    <!-- <label class="form-label" for="form1">Search</label> -->
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>

</form>

<table class="table table-bordered border-primary">
  <thead>
    <tr>
    <!-- <th scope="col">Id</th> -->
    <th scope="col">Id</th>
      <th scope="col">Book Title</th>
      <th scope="col">Category</th>
      <th scope="col">Available</th>
      {{-- <th scope="col">Image</th> --}}
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>



    @foreach($allBooks as $key=>$allBook)
   <tr>
   <td>{{$key+1}}</td>
      <td>{{$allBook->book_name}}</td>
     <td>{{$allBook->category}}</td>
      <td>{{$allBook->available}}</td>
      <td>
        <a button type="button" class=" btn btn-success" href="{{route('detailBook',$allBook->id)}}" data-toggle="">Details</a>
        <a button type="button" class=" btn btn-primary" href="#edit{{$allBook->id}}" data-toggle="modal">Edit</a>
        <a button type="button" class=" btn btn-danger" href="{{route('deleteBook', $allBook->id)}}" >Delete</a>
    </td>
    <div class="modal fade" id="details{{$allBook->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">



        </div>
    </div>

    <div class="modal fade" id="edit{{$allBook->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Book</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action={{route('updateBook', $allBook->id)}} enctype="multipart/form-data">
                        @method('put')
                        @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="exampleInputName">Book Name</label>
                            <input name="book_name" type="text" class="form-control" id="exampleInputName" value={{$allBook->book_name}}>

                        </div>
                                <div class="form-group">
                                    <label for="exampleInputName">Category</label>
                                    <select class="form-select" type="text" name="category" >
                                        <option selected {{$allBook->category}}>{{$allBook->category}}</option>
                                        <option >ENGLISH</option>
                                        <option >BANGLA</option>
                                    </select>
                                </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Book Writer</label>
                            <input name="writer" type="text" class="form-control" id="exampleInputWriter1" value={{$allBook->writer}}>

                            <div class="form-group">
                                <label for="exampleInputName">Book File</label>
                                <input name="file" type="file" class="form-control" id="exampleInput" value={{$allBook->file}}>

                            </div>


                          <div class="form-group">
                            <div class="control">
                              <button type="submit" class="submit-button">
                                Update
                              </button>
                            </div>

                          </div>

                    </div>

                </div>
                </form>

        </div>
    </div>



    </tr>
   @endforeach

  </tbody>

</table>





{{-- book add modal --}}

{{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">

          <h5 class="modal-title" id="staticBackdropLabel">Add Book</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form method="post" action={{route('addBook')}} enctype="multipart/form-data">

            @csrf

        <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputName">Book Name</label>
                <input name="name" type="text" class="form-control" id="exampleInputName" placeholder="Ex: Pother Pachali" required>

            </div>
                    <div class="form-group">
                        <label for="exampleInputName">Category</label>
                        <select class="form-select mb-3" type="text" name="category" required>
                            <option selected value="">Select Category</option>
                            <option >ENGLISH</option>
                            <option >BANGLA</option>
                        </select>
                    </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Book Writer</label>
                <input name="writer" type="text" class="form-control" id="exampleInputWriter1" placeholder="Ex: Adam" required>

            </div>

    </form>

      </div>
    </div>
  </div> --}}

  {{-- book modal --}}

@endsection()
