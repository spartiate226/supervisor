<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class niveau extends Model
{
    function emplois(){
        return $this->hasMany(emploi::class);
    }
    function users(){
        return $this->hasMany(User::class);
    }
}
