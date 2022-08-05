<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Application;
use Illuminate\Http\Request;

class SShipController extends Controller
{
    public function ship()
    {
      return view('frontend.layouts.sship');
    }

    public function page()
    {
      return view('frontend.layouts.application');
    }

    public function store(Request $request)
    {
dd($request->all());
     Application::create([
         'name'=>$request->name,
         'email'=>$request->email,
         'subject'=>$request->subject,
         'message'=>$request->message,
      ]);
      return redirect()->back()->with('msg','Thanks for your Application.');
    }

}
