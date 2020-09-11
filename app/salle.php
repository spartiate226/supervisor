<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salle extends Model
{
    function seances(){
        return $this->hasMany(seance::class);
    }
}
