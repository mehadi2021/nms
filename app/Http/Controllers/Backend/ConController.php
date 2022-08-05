<?php

namespace App\Http\Controllers\Backend;

use App\Models\Frontend\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConController extends Controller
{
    public function contactlist()
    {
        $contacts=Contact::all();
        return view('admin.layouts.add-contact',compact('contacts'));
    }
}
