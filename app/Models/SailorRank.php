<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SailorRank extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function fromrank()
    {

        return $this->belongsTo(Rank::class,'from_rank_id','id');
    }

    public function  torank()
    {
        return $this->belongsTo(Rank::class,'to_rank_id','id');
    }

}
