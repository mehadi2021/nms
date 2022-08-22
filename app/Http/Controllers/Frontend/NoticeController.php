<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;

class NoticeController extends Controller
{
    public function notice()
    {
        $notices=Note::all();
      return view('frontend.layouts.notice',compact('notices'));
    }
}