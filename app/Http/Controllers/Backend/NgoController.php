<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Models\scholarship;
use App\Http\Controllers\Controller;


class NgoController extends Controller
{
    public function create()
    {
        return view('admin.layouts.add-scholarship');
    }


   public function store(Request $request)
   {
       //dd($request->all());
           Scholarship::create([
          'name'=>$request->name,
          'address'=>$request->address,
          'contact_number'=>$request->contact_number,
          'institution_name'=>$request->institution_name,
          'types'=>$request->types,


      ]);
      return redirect()->back();
    }
}
