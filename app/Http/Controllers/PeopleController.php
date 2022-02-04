<?php

namespace App\Http\Controllers;
use App\Models\Rank;
use App\Mail\NotificationMail;

use App\Models\Sailor;
use App\Models\Candidate;
use App\Models\SailorRank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PeopleController extends Controller
{
    public function StoreSailordata(Request $request)
    
    {
      
        // mail notification

        $details=[
            'title'=>'Mail from Sailor Head Quater',
            'body'=>'Congrats!You are qualified as Sailor'
        ];
      
       
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

    // $candidate=Candidate::find($request->candidate_id);
    // Mail::to($candidate->email)->send(new NotificationMail($details));
    Mail::to('sifat.nowshin00@gmail.com')->send(new NotificationMail($details));
    return "Email has been sent to qualified Candidate" ;

    }

   

}
