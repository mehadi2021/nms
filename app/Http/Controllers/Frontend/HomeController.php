<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\support\Facades\stroage;
use Illuminate\support\Facades\Auth;
use App\Models\Booklist;
use App\Models\Frontend\Donation;
use App\Models\Frontend\Here;
use App\Models\Frontend\Book;
use App\Models\Frontend\Loan;

class HomeController extends Controller
{
    public function create()
    {
    //return view('frontend.layouts.board');
    }
    public function ourWork()
    {
    return view('frontend.layouts.our-work');
    }

    public function bookSector()
    {

        $books = Book::with('booklist')->get();

    return view('frontend.layouts.bookSector', compact('books'));
    }

     public function download($file)
    {
        return response()->download(public_path('/uploads/'.$file));

    }

    public function donationSector()
    {
        $donations =Donation::all();
    return view('frontend.layouts.donationSector', compact('donations'));
    }
    public function loanSector()
    {
        $loans = Loan::all();
    return view('frontend.layouts.loanSector', compact('loans'));
    }
     public function donateSector()

   {
        $donates = Here::all();
    return view('frontend.layouts.donateSector', compact('donates'));
    }
}