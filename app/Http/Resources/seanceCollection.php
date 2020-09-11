<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class seanceCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'professeur'=>$this->professeur->prenom,
            'heure'=>$this->heure->dure,
            'emploie'=>$this->emploi,
            'jour'=>$this->jour->nom,
            'matiere'=>$this->matiere->nom,
            'salle'=>$this->salle->salle
        ];
    }
}
