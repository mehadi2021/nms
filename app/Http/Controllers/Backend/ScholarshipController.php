<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\scholarship;
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

}