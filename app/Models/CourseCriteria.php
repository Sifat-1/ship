<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCriteria extends Model
{
   
    protected $guarded = [];
    use HasFactory;

    public function criterialRelation()
    {
        return $this->belongsTo(Course::class,'course_id','id');
        //sailor profile->rank_id,id
    }
}
