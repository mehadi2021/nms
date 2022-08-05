<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function notice()
    {
      return view('frontend.layouts.notice');
    }
}
