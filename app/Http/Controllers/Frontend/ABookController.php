<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Book;
use App\Models\Booklist;
use Illuminate\Http\Request;

class ABookController extends Controller
{
    public function Book()
    {
        $book=Booklist::all();
        return view('frontend.layouts.abook',compact('book'));

    }

    public function store(Request $request)
    {
        // dd($request->all());
        Book::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'booklist_id'=>$request->booklist_id,
            'writer'=>$request->writer,
            'method'=>$request->method,
            'transaction'=>$request->transaction,
        ]);

        return redirect()->back()->with('msg','Thanks for your Feedback.');
    }


      public function applybook()
    {
        $books=Booklist::all();
         return view('frontend.layouts.applybook',compact('books'));

    }
     public function view($id)
    {
        $book=Booklist::find($id);
         return view('frontend.layouts.view',compact('book'));

    }


}