<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\note;
use Illuminate\Http\Request;

class NoteController extends Controller
{

    public function note()
    {
        $notes = Note::all();

        //  dd("hi");
        return view('admin.layouts.note',compact('notes'));

    }

    public function store(Request $request)
    {


        Note::create([
            'notice'=>$request->notice,
        ]);

       return redirect()->back();

    }

    //delete

    public function delete($id)
    {
        // dd($id);

        $notes = Note::find($id);



        $notes->delete();

         return redirect()->route('admin.Note.create')->with('success', 'Book deleted successfully');
    }

//edit method

    public function edit($id)
    {
       $notes=Note::find($id);

       return view('admin.layouts.edit-note',compact('notes'));

    }

//UPDATE METHOD

public function update(Request $request,$id)
{
  $notes=Note::find($id);

      $notes->update([
          'notice' => $request->notice,


      ]);
           return redirect()->route('admin.Note.create')->with('success-message', 'Notice Update Successfully.');
  }



}
