<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emploi extends Model
{
    protected $guarded=[];
    function seances(){
        return $this->hasMany(seance::class);
    }
    function niveau(){
        return $this->belongsTo(niveau::class);
    }
}
