@extends('admin.master')

@section('content')
<h2>Loan Application Details</h2>
<p style="text-align: left;">

</p>
<table class="table table-success table-striped table-responsive ">
  <thead>
    <tr>
        <th scope="col">SL</th>
     <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Date_of_birth</th>
      <th scope="col">Address</th>
      <th scope="col">Nid_no</th>
      <th scope="col">Institution</th>
      <th scope="col">Department</th>
      <th scope="col">Occupation</th>
      <th scope="col">Amount</th>
      <th scope="col">Cause</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($loans as $key=>$contact)
            <tr>
            <th >{{$key+1}}</th>
                <td>{{$contact->name}}</td>
                <td>{{$contact->phone}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->date_of_birth}}</td>
                <td>{{$contact->address}}</td>
                <td>{{$contact->nid_no}}</td>
                <td>{{$contact->institution}}</td>
                <td>{{$contact->department}}</td>
                <td>{{$contact->occupation}}</td>
                <td>{{$contact->amount}}</td>
                <td>{{$contact->cause}}</td>
                <td>{{$contact->status}}</td>
                <td>
                    @if($contact->status =='Pending')
         <div class="btn-group">
                <button type="button" class="btn btn-theme dropdown-toggle" data-toggle="dropdown">
                  Check<span class="caret"></span>
                  </button>
                <ul class="dropdown-menu" style="min-width:95px;" role="menu">
                  <li><a href="{{ route('admin.loan.applyapprove',$contact->id) }}">Approve</a></li>
                   <li><a href="{{route('admin.loancancel',$contact->id)}}">Cancel</a></li>
                </ul>
              </div>

             @else
              {{-- <a button class="btn btn-success btn-xs" href="{{ route('admin.loan.request.details',$list->member_id) }}"><i class=" fa fa-check"></i></a></button> --}}
                <a button type="button" class=" btn btn-danger" href="{{route('deleteloan', $contact->id)}}" >Delete</a>       </td>
        @endif


            </tr>
        @endforeach</td>

  </tbody>
</table>

@endsection
