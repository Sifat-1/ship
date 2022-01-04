<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use App\Models\Rank;

class SailorController extends Controller
{
    public function SailorProfile()
    {
        $key=null;
        if(request()->search){
            $key=request()->search;
            $sailors = People::with('rankcategory')
                ->where('name','LIKE','%'.$key.'%')
                // ->orWhere('rank','LIKE','%'.$key.'%')
                ->get();
            return view('admin.pages.sailorprofilelist',compact('sailors','key'));
        }
        $sailors=People::with('rankcategory')->get();
        // $Basic_courses = Course::where('course_type','Basic')->get();
        // dd($sailors);

        return view('admin.pages.sailorprofilelist',compact('sailors','key'));

    }
    public function CreatSailor()
     { 
        //    though here i will show rank thats y rank variable took
        $ranks=Rank::all();
        return view('admin.pages.creatsailor',compact('ranks'));
    }
    public function ViewSailorProfile($id)
    {
           $sailors=People::find($id);
           return view('admin.pages.sailorprofile_view',compact('sailors'));

    }
    public function DeleteSailorProfile($id)
    {
        People::find($id)->delete();
        return redirect()->back()->with('success',"Sailor Profile has been deleted");
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
        'ship'=>$request->ship,
        

        

    ]);
    return redirect()->back()->with('success','Sailor_profile has created successfully.');
}


}