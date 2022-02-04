<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hazzlist extends Model
{
    use HasFactory;
    Protected $guarded=[];

    public function bringsailor()
    {
        return $this->belongsTo(Sailor::class,'sailor_id','id');
     
    }



}
