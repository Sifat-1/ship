<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller

{
public function Dashboard()
   {
    //  return "Sailor Management System";
  
     return view('admin.pages.dashboard');

    }
}
