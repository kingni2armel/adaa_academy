<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="{{route('GiveGrade',['id'=>$id=$_GET['id']])}}" method="post">
            
            @csrf
            <p>nom de l'etudiant</p>
            <select name="nomStudent" id="">
                    @foreach($nom as $nom)
                                <option value="{{$nom->id}}">{{$nom->name}}</option>
                    @endforeach
            </select> <br>
            <input type="number" name="valeur" id=""> <br>
            <button type="submit">donner la note</button>

        </form>
</body>
</html>