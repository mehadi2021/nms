<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function Donation()
    {
        return view('frontend.layouts.donation');
    }


    public function store(Request $request)
    {
        //  dd($request->all());
        Donation::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'occupation'=>$request->occupation,
            'father_name'=>$request->father_name,
            'father_occupation'=>$request->father_occupation,
            'mother_name'=>$request->mother_name,
            'mother_occupation'=>$request->mother_occupation,
            'number_of_family_member'=>$request->number_of_family_member,
            'address'=>$request->address,
            'amount'=>$request->amount,
            'description'=>$request->description,
        ]);

        return redirect()->back()->with('msg','Thanks for your Feedback.');
    }

}
