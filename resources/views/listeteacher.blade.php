<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>liste des teachers</h1>
            @if ($listeteacher->count()>0)

                @foreach($listeteacher as $liste)

                                <h3>{{$liste->name}}</h3>
                                <form action="{{route('DeleteTeacher',['id'=>$liste->id])}}" method="post">
                                   @csrf      
                                   <button type="submit">Supprimer</button>
                                </form>

                       @endforeach
            @else
                <span>Aucun teacher en base de donnee</span>
            @endif


</body>
</html>