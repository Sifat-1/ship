<?php

namespace App\Http\Controllers;

use App\Models\Rank;
use App\Models\Sailor;
use App\Models\Candidate;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function StoreSailordata(Request $request)
    {
    //    $candidate=Candidate::find($request->candidate_id);
    //    dd($candidate);
  Sailor::create([
        
        'candidate_id'=>$request->candidate_id,
        'rank_id'=>$request->rank,
        'ship'=>$request->ship, 
        'blood'=>$request->blood,    

    ]);
    return redirect()->back();

    }

}
