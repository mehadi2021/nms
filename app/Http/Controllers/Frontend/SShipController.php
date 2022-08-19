<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\Auth;
use App\Models\Frontend\Application;
use App\Models\Scholarship;
use Illuminate\Http\Request;

class SShipController extends Controller
{
    public function ship()
    {
        $mm=Scholarship::all();
      return view('frontend.layouts.sship',compact('mm'));
    }

    public function page()
    {
      return view('frontend.layouts.application');
    }

    public function store(Request $request)
    {
        //dd($request->all());
  $file_name='';
                //step 1: check image exist in this request.
                 if($request->hasFile('photo'))
                 {
                     // step 2: generate file name
                     $file_name=date('Ymdhms') .'.'. $request->file('photo')->getClientOriginalExtension();
                     //step 3 : store into project directory

                     $request->file('photo')->storeAs('/uploads',$file_name);

              }

     Application::create([
         'name'=>$request->name,
         'email'=>$request->email,
         'subject'=>$request->subject,
         'message'=>$request->message,
         'photo' =>$file_name,
      ]);
      return redirect()->back()->with('msg','Thanks for your Application.');
    }



     public function applydetails()
      {
        $id=Auth()->user()->name;
         $data=Application::where('name',$id)->get();
         return view('frontend.layouts.detailsapply',compact('data'));
     }
    }