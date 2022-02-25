<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>liste des cours</h1>
            @if ($listecours->count()>0)

                @foreach($listecours as $liste)

                                <h3>{{$liste->nom}}</h3>
                                <a href="{{route('GetPageUpdateCourse',['id'=>$liste->id])}}">Modifier</a>
                                <form action="{{route('DeleteCourse',['id'=>$liste->id])}}" method="post">
                                    @csrf       
                                <button type="submit">Supprimer</button>
                                </form>

                       @endforeach
            @else
                <span>Aucun cour en base de donnee</span>
            @endif
</body>
</html>