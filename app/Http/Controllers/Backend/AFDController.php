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
}
