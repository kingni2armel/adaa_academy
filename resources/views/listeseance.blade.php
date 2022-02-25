

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>liste des seances</h1>
            @if ($listeseance->count()>0)

                @foreach($listeseance as $liste)

                                <h3> seance du {{$liste->date}}</h3>
                                <a href="{{route('GetpageAffecter',['id'=>$id=$_GET['id']])}}">Faire l'appel</a> 

                              

                       @endforeach
            @else
                <span>Aucune seance en base de donnee</span>
            @endif


</body>
</html>