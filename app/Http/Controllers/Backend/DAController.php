<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donate;
use App\Models\Frontend\Here;
use Illuminate\Http\Request;

class DAController extends Controller
{
    public function amount()
    {
        $donates=Donate::all();
        $here= Here::all();
        return view('admin.layouts.add-amount',compact('donates', 'here'));
    }

    public function approve ($id)
    {

        // dd($id);
        Donate::find($id)->update([
            'status'=>"approve"
        ]);
        return redirect()->back();
    }

    public function hereApprove ($id)
    {

        // dd($id);
        Here::find($id)->update([
            'status'=>"approve"
        ]);
        return redirect()->back();
    }

     public function deleteapply($id)
    {
         //dd($id);

        $apply = Here::find($id);
        $apply->delete();
        return redirect()->route('admin.donar.list')->with('success', 'Book deleted successfully');
    }




  public function apply_approve($id)
      {
         $data=Here::find($id);
         $data->status='Approve';
         $data->save();
         return redirect()->back()->with('success','Apply approve successful');
     }

      public function apply_cancel($id)
      {
         $data=Here::find($id);
         $data->status='Reject';
         $data->save();
         return redirect()->back()->with('success','Apply Reject!!');
     }


}