<?php

namespace App\Http\Controllers;
use App\Models\Candidate;
// use App\Models\People;
// use App\Models\Rank;
use Illuminate\Http\Request;

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
        // dd($request->all());
        Candidate::create([
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
            'image'=>$image_name

        ]);
        return redirect()->back()->with('success','Admission Form has filled up successfully.');
    }
}








            //    public function BringCandidate($id) 
            //    {
            //        $candidates=Candidate::find($id);
            //        $ranks=Rank::all(); 
                   

            //        People::create([
            //         'name'=>$request->name,
            //         'rank_id'=>$request->rank,
            //         'address'=>$request->address,
            //         'email'=>$request->email,
            //         'phone'=>$request->phone,
            //         'ship'=>$request->ship,    
            
            //     ]);
            //        return view('admin.pages.candidatelist',compact('candidates'));


                   

            //    }


}
