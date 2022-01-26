<?php

namespace App\Http\Controllers\website;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use App\Models\Sailor;
use App\Models\SailorRank;
use App\Models\Candidate;
use App\Models\CourseResult;
use App\Models\Rank;
use App\Models\User;
use App\Models\Hazz;
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
    // password update

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function showPasswordform()
    {
      return view('website.sailor.updatepasswordform');
    }
    public function storePasswordform(Request $request)
    {
      $request->validate([
        'current_password' => ['required', new MatchOldPassword],
        'new_password' => ['required'],
        'new_confirm_password' => ['same:new_password'],
    ]);
    User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
    }





    // for result
    public function viewresult()
    {
      $user_id = auth()->user()->id;
      // dd($user_id);
      $user=Candidate::with('sailor')->where('user_id',$user_id)->first();
      $results=CourseResult::with('addingcoursename')->where('sailor_id',$user->sailor->id)->get();
      
      return view ('website.sailor.result',compact('results'));
    }

    // for rank
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
    // for hazz
    public function hazzilist()
    {
      $hazz=Hazz::find(1);
      $candidates=Candidate::with('sailor')->where('age','>=',$hazz->age)
      ->where('religion',$hazz->religion)
      ->get();

      return view('website.sailor.hazz.eligible',compact('candidates','hazz'));
    }
    public function hazzdone()
    {
      
      $sailors=Sailor::with(['pullcandidate','shipcategory'])->where('is_hazz_done','=','yes')->get();
      return view('website.sailor.hazz.donehazz',compact('sailors'));
    }

}
