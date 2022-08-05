<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donate;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function Donate()
   {
       return view('frontend.layouts.donate');
   }

   public function store(Request $request)
   {
    //    dd($request->all());

           Donate::create([
          'amount'=>$request->ammount,
          'transaction_id'=>$request->transaction_ID,
          'payment_method'=>$request->payment_method,
          'type'=>$request->type,



      ]);
      return redirect()->back();
    }


}
