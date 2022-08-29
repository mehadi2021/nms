@extends('admin.master')

@section('content')
<h2>Donation Application Details</h2>
<p style="text-align: left;">

</p>
<table class="table table-success table-striped ">
  <thead>
    <tr>
        <th scope="col">SL</th>
     <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Occupation</th>
      <th scope="col">Father_Name</th>
      <th scope="col">Father_Occupation</th>
      <th scope="col">Mother_Name</th>
      <th scope="col">Mother_Occupation</th>
      <th scope="col">Number_of_Family_Member</th>
      <th scope="col">Address</th>
      <th scope="col">Amount</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($donations as $key=>$contact)
            <tr>
            <th >{{$key+1}}</th>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone}}</td>
                <td>{{$contact->occupation}}</td>
                <td>{{$contact->father_name}}</td>
                <td>{{$contact->father_occupation}}</td>
                <td>{{$contact->mother_name}}</td>
                <td>{{$contact->mother_occupation}}</td>
                <td>{{$contact->number_of_family_member}}</td>
                <td>{{$contact->address}}</td>
                <td>{{$contact->amount}}</td>
                <td>{{$contact->description}}</td>
                <td>{{$contact->status}}</td>
   <td>
                    @if($contact->status =='Pending')
         <div class="btn-group">
                <button type="button" class="btn btn-theme dropdown-toggle" data-toggle="dropdown">
                  Check<span class="caret"></span>
                  </button>
                <ul class="dropdown-menu" style="min-width:95px;" role="menu">
                  <li><a href="{{ route('admin.donation.applyapprove',$contact->id) }}">Approve</a></li>
                   <li><a href="{{route('admin.donationcancel',$contact->id)}}">Cancel</a></li>
                </ul>
              </div>

             @else
              {{-- <a button class="btn btn-success btn-xs" href="{{ route('admin.loan.request.details',$list->member_id) }}"><i class=" fa fa-check"></i></a></button> --}}
                <a button type="button" class=" btn btn-danger" href="{{route('deletedonation', $contact->id)}}" >Delete</a>       </td>
        @endif


            </tr>
        @endforeach</td>
  </tbody>
</table>

@endsection
