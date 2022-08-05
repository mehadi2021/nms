<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoardController extends Controller
{
    public function board()
    {
       return view('frontend.layouts.board');
    }
}
