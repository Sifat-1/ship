<?php

namespace App\Http\Controllers;
use App\Models\Rank;

use Illuminate\Http\Request;

class RankController extends Controller
{
    public function ShowRank()
    
    {
        $ranks=Rank::all();
        return view('admin.pages.showranklist',compact('ranks'));
        
    }

    public function CreatRank()
    {   
        return view('admin.pages.creatrank');
    }
    public function ViewSailorRank($id)
    {
        $ranks=Rank::find($id);
        return view('admin.pages.showrank_view', compact('ranks'));
    }
    public function DeleteSailorRank($id)
    {
      Rank::find($id)->delete();
        return redirect()->back()->with('success',"Sailor Rank has been deleted");
    }
    public function StoreRank( Request $request)
    {
        // dd($request->all());
        $image_name=null;
        // step1
        if ($request->hasFile('rank_image'))
        
        // step 2 genertae file name
        {
           
            $image_name=date('Ymdhis').'.'.$request->file('rank_image')->getClientOriginalExtension();
            // step 3: store project directory
             $request->File('rank_image')->storeAs('/ranks',$image_name);
        }
     
        Rank::create([
            'rank'=>$request->rank,
            'designation'=>$request->designation,
            'rank_image'=>$image_name
        ]);
        return redirect()->back();

    }
}
