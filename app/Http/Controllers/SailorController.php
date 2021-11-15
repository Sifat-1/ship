<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seaman;

class SailorController extends Controller
{
    public function SailorProfile()
    {
        return view('admin.pages.sailorprofilelist');

    }
    public function CreatSailor()
    {
        return view('admin.pages.creatsailor');
    }
    public function StoreSailor(Request $request)
    {
    //    dd($request->all());
    Seaman::create([

        'name'=>$request->name,
        'id'=>$request->id,
        'description'=>$request->description

    ]);
    return redirect()->back();
}


}