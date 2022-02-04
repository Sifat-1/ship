<?php

namespace App\Http\Controllers;
use App\Models\Hazz;
use App\Models\Sailor;

use App\Models\Hazzlist;
use App\Models\Candidate;
use Illuminate\Http\Request;

class HazzController extends Controller
{
    public function ShowshazzCriteria ()
    
    {
      
        $hazz=Hazz::all();
        // $sailors=Sailor::with(['pullcandidate','rankcategory'])->where('is_hazz_done','=','yes')->get();
        return view('admin.pages.hazz.hazzcriteriallist',compact('hazz'));
        
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
        $hazz=Hazz::find(2);
        // $sailors=Sailor::with(['rankcategory','pullcandidate','hazz']
        // )->where([
        //                                                                [$sailors->pullcandidate->religion,$hazz->religion],
        //                                                                [$sailors->pullcandidate->age,'>=',$hazz->age],
        //                                                                ['point','>=',$hazz->point]
        //                                                                ])->get();
                                                                   
       $candidates=Candidate::whereHas('sailor',function($query) use ($hazz){
           $query->where('is_hazz_done','no')->where('point','>=',$hazz->point);
       })->where('age','>=',$hazz->age)
       ->where('religion',$hazz->religion)
       ->get();

    //    dd($candidates);
       
         $hazzlist=Hazzlist::with('bringsailor')->get();
        //  dd( $hazzlist);
        

      

        return view('admin.pages.hazz.eligiblehazz',compact('candidates','hazz','hazzlist'));
        
    }

    
    public function doneEligibleHazz($id)
         {
           $sailor= Sailor::find($id);
           $sailor->update([
            'is_hazz_done'=>'yes'
           ]);
        return redirect()->back();
        
    }
 

    public function storehazzmonth(Request $request)
          {
            //   dd($request->all());
            //   dd(date("Y-m-d h:m:i"));
          
          
            foreach($request->sailor_id as $sailor)
            {
           
        $check=Hazzlist::where('sailor_id',$sailor)->first();

        if(!$check)
            {
                
                Hazzlist::create([ 
                    'sailor_id'=>$sailor,
                    'fromdate'=>$request->fromdate,
                    'todate'=>$request->todate,
                    'year'=>date("Y"),
                      
            
                ]);
            
            }
        }
        return redirect()->back()->with('success','Those sailors record has been stored Already.');

         
        }
    



}
