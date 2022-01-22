<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseResult extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function addingcoursename()
    {
        return $this->belongsTo(Course::class,'course_id','id');
        
    }

}
