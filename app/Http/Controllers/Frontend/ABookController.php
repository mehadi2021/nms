<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Book;
use Illuminate\Http\Request;

class ABookController extends Controller
{
    public function Book()
    {
        return view('frontend.layouts.abook');

    }

    public function store(Request $request)
    {
        // dd($request->all());
        Book::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'book_name'=>$request->book_name,
            'writer'=>$request->writer,
        ]);

        return redirect()->back()->with('msg','Thanks for your Feedback.');
    }


}



