
@extends('admin.master')

@section('content')
<h1>Information Details</h1>
<br>
<br>
 <td>
                    <img src="{{url('/uploads/'.$data->photo)}}" width="1000px" length="200px" alt="product image">
                </td>
@endsection
