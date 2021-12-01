<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use App\Models\Rank;

class SailorController extends Controller
{
    public function SailorProfile()
    {
        $sailors=People::with('rankcategory')->get();
        // dd($sailors);

        return view('admin.pages.sailorprofilelist',compact('sailors'));

    }
    public function CreatSailor()
     { 
        //    though here i will show rank thats y rank variable took
        $ranks=Rank::all();
        return view('admin.pages.creatsailor',compact('ranks'));
    }
    public function StoreSailor(Request $request)
    {
    // dd($request->all());
    $request->validate([
      'name'=>'required',
      'rank'=>'required',
      'address'=>'required',
      'phone'=>'required',
      'email'=>'required',
      'ship'=>'required',


    ]);
        People::create([
        'name'=>$request->name,
        'rank_id'=>$request->rank,
        'address'=>$request->address,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'ship'=>$request->ship

        

    ]);
    return redirect()->back()->with('success','Sailor_profile has created successfully.');
}


}