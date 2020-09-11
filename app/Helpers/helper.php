<?php

use App\heure;
use App\jour;
use App\matiere;
use App\niveau;
use App\professeur;
use App\salle;
use App\seance;

function jours(){
    return jour::all();
}
function heurs(){
    return heure::all();
}
function matieres(){
    return matiere::all();
}
function prof(){
    return professeur::all();
}
function salle(){
    return salle::all();
}
function niveau(){
    return niveau::all();
}
function seance($idemplpoi,$jourid,$heureid){
    $seance=seance::where('emploi_id',$idemplpoi)->where('jour_id',$jourid)->where('heure_id',$heureid)->get();
    return $seance[0];
}
