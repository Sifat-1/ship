<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'peoples';
    protected $guarded = [];
    use HasFactory;

    public function rankcategory()
    {
        return $this->belongsTo(Rank::class,'rank_id','id');
        //sailor profile->rank_id,id
    }
}
