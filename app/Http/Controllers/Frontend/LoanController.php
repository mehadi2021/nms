<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function Loan()
    {
        return view('frontend.layouts.loan');
    }



    public function store(Request $request)
    {
        // dd($request->all());
        Loan::create([

            'name'=>$request->name,
            'phon'=>$request->phon,
            'email'=>$request->email,
            'date_of_birth'=>$request->date_of_birth,
            'address'=>$request->address,
            'nid_no'=>$request->nid_no,
            'institution'=>$request->institution,
            'department'=>$request->department,
            'occupation'=>$request->occupation,
            'amount'=>$request->amount,
            'cause'=>$request->cause
        ]);

        return redirect()->back()->with('msg','Thanks for your Feedback.');
    }
}
