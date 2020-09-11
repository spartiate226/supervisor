<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class seance extends Model
{
    protected $guarded=[];
    function professeur(){
        return $this->belongsTo(professeur::class);
    }
    function heure(){
        return $this->belongsTo(heure::class);
    }
    function jour(){
        return $this->belongsTo(jour::class);
    }
    function matiere(){
        return $this->belongsTo(matiere::class);
    }
    function emploi(){
        return $this->belongsTo(emploi::class);
    }
    function salle(){
        return $this->belongsTo(salle::class);
    }
}
