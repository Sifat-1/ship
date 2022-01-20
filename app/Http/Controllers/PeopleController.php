<?php

namespace App\Http\Controllers;

use App\Models\Rank;
use App\Models\Sailor;
use App\Models\Candidate;
use App\Models\SailorRank;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function StoreSailordata(Request $request)
    {
        // dd($request->all());
    //    $candidate=Candidate::find($request->candidate_id);
    //    dd($candidate);
  $newSailor=Sailor::create([ 
        'candidate_id'=>$request->candidate_id,
        'rank_id'=>$request->rank,
        'ship_id'=>$request->name, 
        'blood'=>$request->blood,    

    ]);


    SailorRank::create([
        'sailor_id'=>$newSailor->id,
        'to_rank_id'=>$request->rank,
    ]);
    return redirect()->back();

    }

}
