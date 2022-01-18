<?php

namespace App\Http\Controllers;
use App\Models\Ship;

use Illuminate\Http\Request;

class ShipController extends Controller
{
    public function ShowShip()
    {
        $ships=Ship::all();
        return view ('admin.pages.showship',compact('ships'));

    }

    public function CreateShip()
    {
        return view ('admin.pages.creatship');

    }
    public function StoreShip( Request $request)
    {
        Ship::create([
            'name'=>$request->name,
            'details'=>$request->details,
          
        ]);
        return redirect()->back()->with('success','Ship has created successfully.');
    }
}
