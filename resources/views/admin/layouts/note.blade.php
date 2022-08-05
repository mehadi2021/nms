@extends('admin.master')


@section('content')


<form action="{{route('admin.Note.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleInput" class="form-label">Create Notice</label>
        <input type="text" name="notice" class="form-control" id="exampleInput" aria-describedby="lHelp">
    </div>
<br>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Notice</th>

    </tr>
    </thead>
    <tbody>
        @foreach ($notes as $key=>$note)
            <tr>
                <th>{{$key+1}}</th>
                <td>{{$note->notice}}</td>
                <td>
                    {{-- <a button type="button" class=" btn btn-success" href="" data-toggle="modal">Details</a> --}}
                    <a button type="button" class=" btn btn-primary" href="{{route('admin.layouts.note.edit',$note->id)}}">Edit</a>
                    <a button type="button" class=" btn btn-danger" onclick="return confirm('Are You Sure?')" href="{{route('admin.layouts.note.delete',$note->id)}}" >Delete</a>

                    {{-- <a class="btn btn-danger" onclick="return confirm('Are You Sure?')" href="{{route('backend.employee.delete',$employee->id)}}">Delete</a> --}}
                </td>
            </tr>
        @endforeach

    </tbody>
</table>


@endsection
