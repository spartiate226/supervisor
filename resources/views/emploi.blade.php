@extends('index')
@section('contenu')
        <div>
            <section>
                 <h4>Annee : {{$emploi->niveau->niveau}}</h4> 
            </section>
            <section>
            <h4>Du {{$emploi->date_debut}} au {{$emploi->date_fin}}</h4>
            </section>
        </div> 
<table class="table table-striped table-hover table-bordered">
    <tr>
        <th>Heures</th>
        @foreach(jours() as $jour)
        <th>{{$jour->nom}}</th>
        @endforeach
    </tr>
    <tbody>
    @foreach(heurs() as $heure)
        <tr>
            <td>
                <h5>{{$heure->dure}}</h5>
            </td>
            @foreach(jours() as $jour)
            <td>
                <h5>{{seance($emploi->id,$jour->id,$heure->id)->matiere->nom}}</h5>
                <p>{{seance($emploi->id,$jour->id,$heure->id)->professeur->nom.' '.seance($emploi->id,$jour->id,$heure->id)->professeur->prenom}}</p>
                <h5>{{seance($emploi->id,$jour->id,$heure->id)->salle->salle}}</h5>
            </td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
