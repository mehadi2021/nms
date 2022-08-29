<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Loan;
use Illuminate\Http\Request;

class AFLController extends Controller
{
    public function loan()
    {
        $loans=Loan::all();
        return view('admin.layouts.afloan',compact('loans'));
    }


     public function deleteapply($id)
    {
        // dd($id);

        $apply_delete = Loan::find($id);
        $apply_delete->delete();
        return redirect()->route('admin.loan')->with('success', 'Book deleted successfully');
    }




  public function apply_approve($id)
      {
         $data=Loan::find($id);
         $data->status='Approve';
         $data->save();
         return redirect()->back()->with('success','Apply approve successful');
     }

      public function apply_cancel($id)
      {
         $data=Loan::find($id);
         $data->status='Reject';
         $data->save();
         return redirect()->back()->with('success','Apply Reject!!');
     }
      
}