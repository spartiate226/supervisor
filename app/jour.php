<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jour extends Model
{
    function seances(){
        return $this->hasMany(seance::class);
    }
}
