<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function Contact()
   {
       return view('frontend.layouts.contact');
   }
   public function store(Request $request)
   {

    Contact::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'subject'=>$request->subject,
        'message'=>$request->message,
     ]);
     return redirect()->back()->with('msg','Thanks for your Feedback.');
   }
}
