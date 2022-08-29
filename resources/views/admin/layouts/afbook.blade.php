@extends('admin.master')

@section('content')
<h2>Book Application Details</h2>
<p style="text-align: left;">

</p>
<table class="table table-success table-striped ">
  <thead>
    <tr>
        <th scope="col">SL</th>
     <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Method</th>
      <th scope="col">Transaction</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
  @foreach ($books as $key=>$contact)
            <tr>
            <th >{{$key+1}}</th>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->method}}</td>
                <td>{{$contact->transaction}}</td>
                 <td>{{$contact->status}}</td>
                <td>
@if($contact->status =='In Process')
         <div class="btn-group">
                <button type="button" class="btn btn-theme dropdown-toggle" data-toggle="dropdown">
                  Check<span class="caret"></span>
                  </button>
                <ul class="dropdown-menu" style="min-width:95px;" role="menu">
                  <li><a href="{{ route('admin.book.approve',$contact->id) }}">Approve</a></li>
                   <li><a href="{{route('admin.book.cancel',$contact->id)}}">Cancel</a></li>
                </ul>
              </div>

             @else
              {{-- <a button class="btn btn-success btn-xs" href="{{ route('admin.loan.request.details',$list->member_id) }}"><i class=" fa fa-check"></i></a></button> --}}
                <a button type="button" class=" btn btn-danger" href="{{route('deleteapply', $contact->id)}}" >Delete</a>       </td>
        @endif




            </tr>
        @endforeach
  </tbody>
</table>

@endsection
