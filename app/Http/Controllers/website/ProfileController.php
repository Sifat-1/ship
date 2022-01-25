<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Sailor;
use App\Models\SailorRank;
use App\Models\Candidate;
use App\Models\CourseResult;
use App\Models\Rank;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function showprofile()
   {

      
    // dd(auth()->user());
    $user_id = auth()->user()->id;
    // dd($user_id);
    $user=Candidate::with('sailor')->where('user_id',$user_id)->first();

     return view('website.sailor.sailorprofile',compact('user'));

    }
    public function updatePassword()
    {
      return view('website.sailor.updatepassword');
    }

    public function viewresult()
    {
      $user_id = auth()->user()->id;
      // dd($user_id);
      $user=Candidate::with('sailor')->where('user_id',$user_id)->first();
      $results=CourseResult::with('addingcoursename')->where('sailor_id',$user->sailor->id)->get();
      
      return view ('website.sailor.result',compact('results'));
    }
    public function showrank()
    {
      $user_id = auth()->user()->id;
      // dd($user_id);
      $user=Candidate::with('sailor')->where('user_id',$user_id)->first();
      $history=SailorRank::with(['fromrank','torank'])->where('sailor_id',$user->sailor->id)->get();
      
      return view ('website.sailor.rank.rankhistory',compact('history'));
    }
    public function ranklist()
    {
      $ranks=Rank::all();
      
      return view ('website.sailor.rank.ranklist',compact('ranks'));
    }
}
