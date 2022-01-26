<?php

namespace App\Http\Controllers;
// use Carbon\Carbon;
// use App\Models\People;
use App\Models\Rank;
use App\Models\Ship;
use App\Models\User;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CandidateController extends Controller
{
    public function CandidateList()
    {
        $candidates=Candidate::all();
       return view('admin.pages.candidatelist',compact('candidates'));
    }

    public function StoreCandidatedata(Request $request)
    {
        
        $image_name=null;
        // step1
        if ($request->hasFile('candidate_image'))
        
        // step 2 genertae file name
        {
           
            $image_name=date('Ymdhis').'.'.$request->file('candidate_image')->getClientOriginalExtension();
            // step 3: store project directory
             $request->File('candidate_image')->storeAs('/candidates',$image_name);
        }
        {
            // dd($request->all());
            $request->validate([
              'first_name'=>'required',
              'last_name'=>'required',
              'address'=>'required',
              'date'=>'required',
              'nationality'=>'required',
              'bloodgroup'=>'required',
              'phone'=>'required',
              'address'=>'required',
              'phone'=>'required',
              'religion'=>'required',
              'email'=>'required',
              'fathername'=>'required',
              'mothername'=>'required',
              'foccupation'=>'required',
              'moccupationl'=>'required',
            //   'image_name'=>'required',
              
        
        
            ]);
      


            $user=User::create([
                'name'=>$request->first_name .' '.$request->last_name,
                'email'=>$request->email,
                'password'=>bcrypt('12345'),
                'role'=>'sailor',
                 'mobile'=>$request->phone,
            ]);



            $dob=$request->date;
            // dd(date('Y- m -d',strtotime($dob)));
            $age=Carbon::parse(date("Ymd",strtotime($dob)))->age;
            // dd($age);
        Candidate::create([
            'user_id'=>$user->id,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'address'=>$request->address,
            'date'=>$request->date,
            'nationality'=>$request->nationality,
            'bloodgroup'=>$request->bloodgroup,
            'phone'=>$request->phone,
            'religion'=>$request->religion,
            'email'=>$request->email,
            'fathername'=>$request->fathername,
            'mothername'=>$request->mothername,
            'foccupation'=>$request->foccupation,
            'moccupationl'=>$request->moccupationl,
            'image'=>$image_name,
            'age'=>$age

            
           
        ]);
        return redirect()->back()->with('success','Admission Form has filled up successfully.');
    }
}

public function VIewCandidateProfile($candidate_id)
{
    $candidate=Candidate::find($candidate_id);
    $ranks=Rank::all();
    $ships=Ship::all();
    return view('admin.pages.candidateView', compact('candidate','ranks','ships'));
}

}




















// public function CauseView($cause_id)
// {
//     $cause=Cause::find($cause_id);
//     return view('admin.pages.view_cause_details',compact('cause'));

// }