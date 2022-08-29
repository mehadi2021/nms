<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donation;
use Illuminate\Http\Request;

class AFDController extends Controller
{
    public function adonation()
    {
        $donations=Donation::all();
        return view('admin.layouts.afdonation',compact('donations'));
    }

      public function deleteapply($id)
    {
        // dd($id);

        $apply_delete = Donation::find($id);
        $apply_delete->delete();
        return redirect()->route('admin.adonation')->with('success', 'Book deleted successfully');
    }




  public function apply_approve($id)
      {
         $data=Donation::find($id);
         $data->status='Approve';
         $data->save();
         return redirect()->back()->with('success','Apply approve successful');
     }

      public function apply_cancel($id)
      {
         $data=Donation::find($id);
         $data->status='Reject';
         $data->save();
         return redirect()->back()->with('success','Apply Reject!!');
     }

}