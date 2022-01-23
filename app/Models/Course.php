<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    Protected $guarded=[];

    public function criteria()
    {
        return $this->hasOne(CourseCriteria::class);
    }
}
