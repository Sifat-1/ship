<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
        //  Registration
    public function registration(Request $request)
    {
        User::create([
            'name'=>$request->user_name,
           'email'=>$request->user_email,
           'password'=>bcrypt($request->user_password),
           'mobile'=>$request->user_mobile,


        ]);
        return redirect()->back()->with('notification','Registration has done successful.');
    }

            //  Log IN
        public function login(Request $request)
        {
    
            $credentials=$request->except('_token');
    //        $credentials['email']=$request->user_email;
    //        $credentials['password']=$request->user_password;
    //        dd($credentials);
    //        $credentials=$request->only('user_email','user_password');
    
    
            if(Auth::attempt($credentials)){
                return redirect()->back()->with('notification','Login has been successful.');
            }
            return redirect()->back()->with('error','Invalid user credentials');
    
        }
        public function logout()
        {
            Auth::logout();
         return redirect()->route('website')->with('notification','Logging out.');
        }
    
    }

