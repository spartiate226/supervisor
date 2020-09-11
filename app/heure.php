<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class heure extends Model
{
    function seances(){
        return $this->hasMany(seance::class);
    }
}
