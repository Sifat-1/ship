<?php

namespace App\Http\Controllers;

use App\Models\Hazz;
use App\Models\Rank;
use App\Models\Ship;
use App\Models\Course;
use App\Models\Sailor;
use App\Models\Candidate;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function showdashboard()
    {  
        $count['candidates']=Candidate::all()->count(); 
        $count['sailors']=Sailor::all()->count(); 
        $count['hazz']=Sailor::where('is_hazz_done','=','yes')->count(); 
        $count['ranks']=Rank::all()->count(); 
        $count['courses']=Course::all()->count(); 
        $count['ships']=Ship::all()->count(); 
        // $count['hazz']=Hazz::all()->count(); 
        return view('admin.pages.dashboard',compact('count'));
    }
    public function showdonehazz()
    {  
        $sailors=Sailor::with(['pullcandidate','rankcategory'])->where('is_hazz_done','=','yes')->get();
        
        return view('admin.pages.hazz.donehazz',compact('sailors'));
    }
}


























// $reports=[];
//         if(request()->has('fromdate'))
//         {
//             $from_date=request()->fromdate;
//             $to_date=request()->todate;
            
        
//         $reports=Sailor::where('is_hazz_done','yes')
//         ->whereDate('created_at','>=',$from_date)
//         ->whereDate('created_at','<=',$to_date)
//         ->get();
//         }