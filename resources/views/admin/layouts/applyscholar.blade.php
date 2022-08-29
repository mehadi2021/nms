@extends('admin.master')

@section('content')
<h2> Scholarship Application Details</h2>
<p style="text-align: left;">

</p>
<table class="table table-success table-striped ">
  <thead>
    <tr>
        <th scope="col">SL</th>
     <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
      <th scope="col">Document</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
  @foreach ($applys as $key=>$apply)
            <tr>
            <th >{{$key+1}}</th>
                <td>{{$apply->name}}</td>
                <td>{{$apply->email}}</td>
                <td>{{$apply->subject}}</td>
                <td>{{$apply->message}}</td>
                 <td>
                    <img src="{{url('/uploads/'.$apply->photo)}}" width="30px" alt="product image">
                </td>
                  <td>{{$apply->status}}</td>
                 <td>
       <a button type="button" class=" btn btn-success" href="{{route('admin.loan.request.details',$apply->id)}}" data-toggle="">Details</a>

    </td>
                <td>
@if($apply->status =='In Process')
         <div class="btn-group">
                <button type="button" class="btn btn-theme dropdown-toggle" data-toggle="dropdown">
                  Check<span class="caret"></span>
                  </button>
                <ul class="dropdown-menu" style="min-width:95px;" role="menu">
                  <li><a href="{{ route('admin.loan.approve',$apply->id) }}">Approve</a></li>
                   <li><a href="{{route('admin.loan.cancel',$apply->id)}}">Cancel</a></li>
                </ul>
              </div>

             @else
              {{-- <a button class="btn btn-success btn-xs" href="{{ route('admin.loan.request.details',$list->member_id) }}"><i class=" fa fa-check"></i></a></button> --}}
                <a button type="button" class=" btn btn-danger" href="{{route('deleteapply', $apply->id)}}" >Delete</a>       </td>
        @endif


            </tr>
        @endforeach
  </tbody>
</table>

@endsection
