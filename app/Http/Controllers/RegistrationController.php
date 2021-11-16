<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admission;

class RegistrationController extends Controller
{
    public function Registration()
    {
        return view('admin.pages.registration');
    }
    Public function GetRegistration(Request $request)
    {
        // dd($request->all());
        Admission::create([
        'username'=>$request->name,
        'email'=>$request->email,
        'pass'=>$request->pass,
        'repass'=>$request->repass

        ]);
        return redirect()->back();
    }
}
