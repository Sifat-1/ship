<?php

namespace App\Http\Controllers;
use App\Models\Hazz;
use App\Models\Sailor;

use App\Models\Candidate;
use Illuminate\Http\Request;

class HazzController extends Controller
{
    public function ShowshazzCriteria ()
    
    {
      
        $hazz=Hazz::all();
        $sailors=Sailor::with(['pullcandidate','rankcategory'])->where('is_hazz_done','=','yes')->get();
        return view('admin.pages.hazz.hazzcriteriallist',compact('hazz','sailors'));
        
    }

    public function creathazzCriteria()
    
    {
      
        return view('admin.pages.hazz.addhazzcriteria');
        
    }

    public function storehazzCriteria( Request $request)

    {
       
        Hazz::create([
          
            'religion'=>$request->religion,
            'age'=>$request->age,
            'point'=>$request->point
        ]);
        return redirect()->back()->with('success','Hazz Criteria has filled up successfully.');

    }

    public function showEligibleHazz()
    
    {
        $hazz=Hazz::find(1);
        // $sailors=Sailor::with(['rankcategory','pullcandidate','hazz']
        // )->where([
        //                                                                [$sailors->pullcandidate->religion,$hazz->religion],
        //                                                                [$sailors->pullcandidate->age,'>=',$hazz->age],
        //                                                                ['point','>=',$hazz->point]
        //                                                                ])->get();
                                                                   
       $candidates=Candidate::with('sailor')->where('age','>=',$hazz->age)
       ->where('religion',$hazz->religion)
       ->get();

        return view('admin.pages.hazz.eligiblehazz',compact('candidates','hazz'));
        
    }

    
    public function doneEligibleHazz($id)
         {
           $sailor= Sailor::find($id);
           $sailor->update([
            'is_hazz_done'=>'yes'
           ]);
        return redirect()->back();
        
    }
    


}
