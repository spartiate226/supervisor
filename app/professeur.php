<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class professeur extends Model
{
    function seances(){
        return $this->hasMany(seance::class);
    }
}
