@extends('admin.master')

@section('content')


<div class="card-content">
    <form method="post" action={{route('addBook')}} enctype="multipart/form-data">
           @csrf



          <div class="form-group">
            <label for="exampleInputName">Book Name</label>
            <input name="book_name" type="text" class="form-control" id="exampleInputName" placeholder="Ex: Pother Pachali" required>

        </div>
                <div class="form-group">
                    <label for="exampleInputName">Category</label>
                    <select class="form-select" type="text" name="category" required>
                        <option selected value="">Select Category</option>
                        <option >ENGLISH</option>
                        <option >BANGLA</option>
                    </select>
                </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Book Writer</label>
            <input name="writer" type="text" class="form-control" id="exampleInputWriter1" placeholder="Ex: Adam" required>

            <div class="form-group">
                <label for="exampleInputName">Book File </label>
                <input type="file" name="file"  class="form-control" id="exampleInput" placeholder="Ex:file" required>

            </div>
            <div class="form-group">
                <label for="exampleInputName">Book Price </label>
                <input type="price" name="price"  class="form-control" id="exampleInput" placeholder="Ex:price" required>

            </div>

          <div class="form-group">
            <div class="control">
              <button type="submit" class="submit-button">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
@endsection
