<?php

namespace App\Http\Controllers;

use App\Models\Rank;
use App\Models\People;
use App\Models\Sailor;
use App\Models\Ship;
use App\Models\SailorRank;
use App\Models\CourseResult;
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
            // dd($rank_id);
            $sailors = Sailor::with(['rankcategory','shipcategory'])
                ->where('rank_id','LIKE',$rank_id)
                // ->orWhere('rank','LIKE','%'.$key.'%')
                ->get();
                // dd($sailors);
            return view('admin.pages.sailorprofilelist',compact('sailors','key'));
        }
        $sailors=Sailor::with(['rankcategory','pullcandidate','shipcategory'])->paginate(10);
        // $Basic_courses = Course::where('course_type','Basic')->get();
        // dd($sailors);

        return view('admin.pages.sailorprofilelist',compact('sailors','key'));

    }
    public function CreatSailor()
     { 
        //    though here i will show rank thats y rank variable has taken
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
           $sailors=Sailor::with('ranks')->find($id);
           $results=CourseResult::with('addingcoursename')->where('sailor_id',$id)->get();
        //    dd($results);
        
           return view('admin.pages.sailorprofile_view',compact('sailors','results'));

    }
    

    // for rank
    public function editRank($sailor_id)
    {
        $sailors=Sailor::find($sailor_id);
        $ranks=Rank::all();
        return view('admin.pages.updaterank',compact('ranks','sailors'));
    }




    public function updateSailorRank(Request $request,$sailor_id)
    {
    // dd($request->all());
    
    $sailors=Sailor::find($sailor_id);

    SailorRank::create([
        'sailor_id'=>$sailor_id,
        'from_rank_id'=>$sailors->rank_id,
        'to_rank_id'=>$request->rank,
    ]);

    $sailors->update([
        
        'rank_id'=>$request->rank,
          

    ]);
  

  
    return redirect()->back();
    }

    public function DeleteSailorProfile($id)
    {
        Sailor::find($id)->delete();
        return redirect()->back()->with('success',"Sailor Profile has been deleted");
    }



}


// return redirect()->route('bring.sailor')->with('success','Sailor_profile has created successfully.');