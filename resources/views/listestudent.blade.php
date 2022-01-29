<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>liste des etudiants</h1>
            @if ($listestudent->count()>0)

                @foreach($listestudent as $liste)

                                <h3>{{$liste->name}}</h3>

                       @endforeach
            @else
                <span>Aucun pratical work en base de donnee</span>
            @endif


</body>
</html>