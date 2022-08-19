<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\scholarship;
use App\Models\Frontend\Application;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function scholarship()
    {
        return view('admin.layouts.scholarship');
    }

    public function store(Request $request)
    {


        scholarship::create([
            'scholarship'=>$request->scholarship,
        ]);

return redirect()->back();
}
 public function apply()
    {
        $applys=Application::all();
         return view('admin.layouts.applyscholar',compact('applys'));
    }
    public function deleteapply($id)
    {
        // dd($id);

        $apply = Application::find($id);
        $apply->delete();
        return redirect()->route('admin.scholarshippview')->with('success', 'Book deleted successfully');
    }




  public function apply_approve($id)
      {
         $data=Application::find($id);
         $data->status='Approve';
         $data->save();
         return redirect()->back()->with('success','Apply approve successful');
     }

      public function apply_cancel($id)
      {
         $data=Application::find($id);
         $data->status='Reject';
         $data->save();
         return redirect()->back()->with('success','Apply Reject!!');
     }
       public function apply_details($id)
      {
         $data=Application::find($id);
         return view('admin.layouts.detailsapply',compact('data'));
     }

}