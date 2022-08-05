<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{


    Public function profile($id)
    {
       $profiles=User::find($id);
       return view('frontend.layouts.student-profile',compact('profiles'));

    }
}
