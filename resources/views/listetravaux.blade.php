<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>liste des travaux pratiques</h1>
            @if ($listetravauxpratique->count()>0)

                @foreach($listetravauxpratique as $liste)

                                <h3>{{$liste->intitule}}</h3>
                                <h3>{{$liste->date}}</h3>

                                <a href="{{route('GetPageUpdatePraticalWork',['id'=>$liste->id])}}">Modifier</a><br>
                                <a href="{{route('getpage',['id'=>$liste->id])}}">Attribuer les notes</a>

                       @endforeach
            @else

                <span>Aucun pratical work en base de donnee</span>
            @endif


</body>
</html>