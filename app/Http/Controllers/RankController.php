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
    public function StoreRank( Request $request)
    {
        // dd($request)->all();
        Rank::create([
            'rank'=>$request->rank,
            'designation'=>$request->designation
        ]);
        return redirect()->back();

    }
}
