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
}
