<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
   public function FillForm()
   {
    return view('admin.pages.test');
   }
}
