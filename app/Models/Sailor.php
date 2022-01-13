<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sailor extends Model
{
    protected $table = 'sailors';
    use HasFactory;
    protected $guarded=[];

    public function rankcategory()
    {
        return $this->belongsTo(Rank::class,'rank_id','id');
        //sailor profile->rank_id,id
    }
    public function pullcandidate()
    {
        return $this->belongsTo(Candidate::class,'candidate_id','id');
        //sailor profile->rank_id,id
    }
}
