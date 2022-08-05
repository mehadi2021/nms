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
}
