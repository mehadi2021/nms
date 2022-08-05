<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Book;
use Illuminate\Http\Request;

class AFBController extends Controller
{
    public function book()
    {
        $books=Book::all();
        return view('admin.layouts.afbook',compact('books'));
    }
}
