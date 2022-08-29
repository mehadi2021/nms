@extends('admin.master')

@section('content')
<h2>Donation History</h2>
<p style="text-align: left;">

</p>
<table class="table table-success table-striped ">
  <thead>
    <tr>
        <th scope="col">SL</th>
     <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Current Donation</th>
      <th scope="col">Total Donation</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
         </tr>
  </thead>
  <tbody>

        @foreach ($donar as $key=>$donat)
        <tr>
        <th >{{$key+1}}</th>
        <td>{{$donat->name}}</td>
        <td>{{$donat->email}}</td>
        <td>{{$donat->phone}}</td>
        <td>{{$donat->amount}}</td>
        <td>{{$donat->total_amount}}</td>

     </td>
                  <td>{{$donat->status}}</td>

                <td>
@if($donat->status =='pending')
         <div class="btn-group">
                <button type="button" class="btn btn-theme dropdown-toggle" data-toggle="dropdown">
                  Check<span class="caret"></span>
                  </button>
                <ul class="dropdown-menu" style="min-width:95px;" role="menu">
                  <li><a href="{{ route('admin.donar.approve',$donat->id) }}">Approve</a></li>
                   <li><a href="{{route('admin.donar.cancel',$donat->id)}}">Cancel</a></li>
                </ul>
              </div>

             @else
              {{-- <a button class="btn btn-success btn-xs" href="{{ route('admin.loan.request.details',$list->member_id) }}"><i class=" fa fa-check"></i></a></button> --}}
                <a button type="button" class=" btn btn-danger" href="{{route('deletedonar', $donat->id)}}" >Delete</a>       </td>
        @endif


            </tr>
        @endforeach

  </tbody>
</table>

@endsection
