<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Here;
use Illuminate\Http\Request;

class MDHController extends Controller
{
    public function Here()
    {
        return view('frontend.layouts.mdh');

    }
    public function store(Request $request)
    {
     //    dd($request->all());
        $new =     Here::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
           'amount'=>$request->ammount,
           'transaction_id'=>$request->transaction_ID,
           'payment_method'=>$request->payment_method,
           'type'=>$request->type,



       ]);

       $total_amount = Here::where('email', $new->email)->get()->sum('amount');
       Here::where('id', $new->id)->update([
           'total_amount' => $total_amount,
       ]);
       return redirect()->back();
     }

     public function donarList()
     {
         $donar = Here::all();
         return view('admin.layouts.donor-list', compact('donar'));

     }

}
