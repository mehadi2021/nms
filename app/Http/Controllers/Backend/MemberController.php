<?php

namespace App\Http\Controllers\Backend;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function create(){
        // dd();
        $members = Member::all();

        return view('admin.layouts.create-member');
    }

    public function list(){

        $members=Member::all();

        return view('admin.layouts.member-list',compact('members'));
    }

    public function store(Request $request){
        // dd($request->all());
        Member::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,

        ]);
        return redirect()->route('admin.member.list');
    }
}
