@extends('index')
@section('contenu')
        
<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>Semaine</th>
            <th>Niveau</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($emploi as $emploi)
            <tr>
                <td>Du {{$emploi->date_debut}} au {{$emploi->date_fin}}</td>
                <td>{{$emploi->niveau->niveau}}</td>
                <td>
                <a href="{{url('lookEmploi/blank/'.$emploi->id)}}" class="btn btn-success">Voir</a>
                <form class="d-inline" action="{{route('emploi.destroy',[$emploi->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">suppirmer</button>
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
