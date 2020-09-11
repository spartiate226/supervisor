<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Supervisor</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Supervisor</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @if (Auth::user()->role==0)
            <li class="nav-item active">
                <a class="nav-link" href="{{url('lookEmploi/'.Auth::user()->niveau_id)}}">Emploie du temps <span class="sr-only">(current)</span></a>
                </li>
            @endif
            @if (Auth::user()->role==1)
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Nouveau</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('emploi.index')}}">Liste des programmes</a>
            </li>
            @endif
            <li class="nav-item">
            <a class="nav-link" href="{{url('deconnexion')}}">Deconnexion</a>
            </li>
        </ul>
    </div>
</nav>

@yield('contenu')
</body>
</html>
