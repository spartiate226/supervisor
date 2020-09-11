<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matiere extends Model
{
    function seances(){
        return $this->hasMany(seance::class);
    }
}
