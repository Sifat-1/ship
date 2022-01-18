<?php

namespace App\Http\Controllers;

use App\Models\Rank;
use App\Models\People;
use App\Models\Sailor;
use App\Models\Ship;
use Illuminate\Http\Request;


class SailorController extends Controller
{
    public function SailorProfile()
    {
        $key=null;
        if(request()->search){
            $key=request()->search;
            // dd($key);
            $rank = Rank::where('rank','LIKE','%'.$key.'%')->get();
            // dd($rank);
            $rank_id = $rank->pluck('id');
            $sailors = Sailor::with(['rankcategory','shipcategory'])
                ->where('rank_id','LIKE',$rank_id)
                // ->orWhere('rank','LIKE','%'.$key.'%')
                ->get();
                // dd($sailors);
            return view('admin.pages.sailorprofilelist',compact('sailors','key'));
        }
        $sailors=Sailor::with(['rankcategory','pullcandidate','shipcategory'])->get();
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

    public function ViewSailorProfile($id)
    {
           $sailors=People::find($id);
           return view('admin.pages.sailorprofile_view',compact('sailors'));

    }


    public function editSailor($id)
     { 
      
        $sailor = People::find($id);
        $ranks=Rank::all(); 
      return view('admin.pages.updatesailor',compact('ranks','sailor'));
    }


    public function updateSailor(Request $request,$id)
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

    $sailor = People::find($id);

    $sailor->update([
        'name'=>$request->name,
        'rank_id'=>$request->rank,
        'address'=>$request->address,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'ship'=>$request->ship,    

    ]);
    return redirect()->route('bring.sailor')->with('success','Sailor_profile has created successfully.');
}


    public function DeleteSailorProfile($id)
    {
        People::find($id)->delete();
        return redirect()->back()->with('success',"Sailor Profile has been deleted");
    }



}