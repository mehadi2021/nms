@extends('frontend.index')
@section('content')
<h5 style="text-align: center;">Notice</h5>
<br>
<br>




<table class="table table-success table-striped ">
  <thead>
    <tr>
        <th scope="col">SL</th>
     <th style="text-align: center;">Notice</th>



    </tr>
  </thead>
  <tbody>
@foreach ($notices as $key=>$datas )
            <tr>
            <th >{{$key+1}}</th>
                <td style="text-align: center;">{{$datas->notice}}</td>

            </tr>
  </tbody>
@endforeach
@endsection










