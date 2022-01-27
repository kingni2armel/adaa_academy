<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>liste des sessions</h1>
            @if ($listesession->count()>0)

                @foreach($listesession as $liste)

                                <h3>{{$liste->intitule}}</h3>
                                <a href="{{route('show',['id'=>$liste->id])}}">Operation</a>

                       @endforeach
            @else
                <span>Aucun post en base de donnee</span>
            @endif
</body>
</html>