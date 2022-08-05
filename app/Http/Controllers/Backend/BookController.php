<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booklist;
use Illuminate\Http\Request;

class BookController extends Controller
{



    public function create()
    {
        $key=null;
        if(request()->search){
            $key=request()->search;
            $allBooks = BookList::where('book_name','LIKE','%'.$key.'%')->get();
            return view('admin.layouts.category.books.book-list',compact('allBooks','key'));
        }
        $allBooks = BookList::all();
        return view('admin.layouts.category.books.book-list',compact('allBooks','key'));

    }
    public function bookForm()
    {
// dd('add');
        return view('admin.layouts.category.book-category.book-form');
    }
    public function addBook(Request $request)
    {

        // dd($request->all());


        $file_name='';
                //step 1: check image exist in this request.
                 if($request->hasFile('file'))
                 {
                     // step 2: generate file name
                     $file_name=date('Ymdhms') .'.'. $request->file('file')->getClientOriginalExtension();
                     //step 3 : store into project directory

                     $request->file('file')->storeAs('/uploads',$file_name);

              }

        Booklist::create([
            'book_name' => $request->book_name,
            'category' => $request->category,
            'writer' => $request->writer,
            'file' =>$file_name,
            'price' =>$request->price,

        ]);
        return redirect()->route('allBook')->with('success', 'Book created successfully');;
    }
    public function updateBook(Request $request, $id)
    {


        $file_name='';
        //step 1: check image exist in this request.
         if($request->hasFile('file'))
         {
             // step 2: generate file name
             $file_name=date('Ymdhms') .'.'. $request->file('file')->getClientOriginalExtension();
             //step 3 : store into project directory

             $request->file('file')->storeAs('/uploads',$file_name);

      }


         $book=BookList::find($id);



       $book->update([
        'book_name' => $request->book_name,
        'category' => $request->category,
        'writer' => $request->writer,
        'file' =>$file_name
        ]);
        return redirect()->route('allBook')->with('success', 'Book updated successfully');
    }
    public function deleteBook($id)
    {
        // dd($id);

        $book = BookList::find($id);



        $book->delete();

        return redirect()->route('allBook')->with('success', 'Book deleted successfully');
    }


    public function details($id)
    {
// dd('add');
        $list=BookList::find($id);
        return view('admin.layouts.category.books.view-book',compact('list'));
    }

//     public function store(Request $request)
//     {
// //  dd($request->all());
// $file_name='';
//                 //step 1: check image exist in this request.
//                  if($request->hasFile('book_image'))
//                  {
//                      // step 2: generate file name
//                      $file_name=date('Ymdhms') .'.'. $request->file('book_image')->getClientOriginalExtension();
//                      //step 3 : store into project directory

//                      $request->file('book_image')->storeAs('/uploads',$file_name);

//               }




//     }

}
