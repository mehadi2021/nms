<?php


namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registration(Request $request)
    {

        User::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'password'=>bcrypt($request->password),
           'mobile'=>$request->mobile,
        ]);

        return redirect()->back()->with('message','Registration successful.');


    }


    public function login(Request $request)
    {

        $userInfo=$request->except('_token');
        $credentials['email']=$request->user_email;
         $credentials['password']=$request->user_password;

         $credentials=$request->only('user_email','user_password');


        if(Auth::attempt($userInfo)){
            return redirect()->back()->with('message','Login successful.');
        }
        return redirect()->back()->with('error','Invalid user credentials');

    }


    public function logout()
    {

        Auth::logout();
     return redirect()->back();
    }
}