<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class SailorController extends Controller
{
    public function SailorProfile()
    {
        $sailors=People::all();
        // dd($sailors);

        return view('admin.pages.sailorprofilelist',compact('sailors'));

    }
    public function CreatSailor()
    {
        return view('admin.pages.creatsailor');
    }
    public function StoreSailor(Request $request)
    {
    // dd($request->all());
        People::create([
        'name'=>$request->name,
        'rank'=>$request->rank,
        'address'=>$request->address,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'ship'=>$request->ship

        

    ]);
    return redirect()->back();
}


}