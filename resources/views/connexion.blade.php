<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Supervisor</title>
</head>
<body class="h-100">
 <div class="row justify-content-center h-100 m-0">
     <section class="d-flex col-5 h-100 flex-column justify-content-center">
     <form class="p-3 shadow" method="POST" action="{{url('connexion')}}">
        @csrf
             <div class="form-group">
                 <input type="text" placeholder="Pseudonyme" class="form-control" name="pseudo">
             </div>
             <div class="form-group">
                <input type="password" placeholder="Mot de passe" class="form-control" name="password">
             </div>
             <button class="btn btn-success w-100">Connexion</button>
         </form>
     </section>
 </div>
</body>
</html>

