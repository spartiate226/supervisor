@extends('index')
@section('contenu')
    <form class="m-2" method="post" action="{{route('emploi.store')}}">
        @csrf
        <div class="row">
            <div class="form-group col-4">
                <input type="date" name="date_debut" class="form-control">
            </div>
            <div class="form-group col-4">
                <input type="date" name="date_fin" class="form-control">
            </div>
            <div class="form-group col-4">
                <select class="form-control" name="niveau">
                    @foreach(niveau() as $niveau)
                        <option value="{{$niveau->id}}">{{$niveau->niveau}}</option>
                    @endforeach
                </select>
            </div>
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
                    {{$compter++}}
                    <input type="text" name="heure{{$compter}}" value="{{$heure->id}}" hidden>
                    <input type="text" name="jour{{$compter}}" value="{{$jour->id}}" hidden>
                    <div class="form-group">
                        <select class="form-control" name="matiere{{$compter}}">
                            @foreach(matieres() as $matiere)
                                <option value="{{$matiere->id}}">{{$matiere->nom}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="proffesseur{{$compter}}">
                            @foreach(prof() as $professeur)
                                <option value="{{$professeur->id}}">{{$professeur->nom}} {{$professeur->prenom}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="salle{{$compter}}">
                            @foreach(salle() as $salle)
                                <option value="{{$salle->id}}">{{$salle->salle}}</option>
                            @endforeach
                        </select>
                    </div>
                </td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
        <div class="row m-0">
            <button class="btn btn-primary col-5" type="submit">Publier</button>
        </div>
    </form>
@endsection
