<form action="{{route('CreateSeance',['id'=>$id=$_GET['id']])}}" method="post">
        @csrf
        <h1>nom du cour</h1>
        <select name="nomcour" id="">
            @foreach($listeS as $listecourss)
                    <option value="{{$listecourss->id}}">{{$listecourss->nom}}</option>
            @endforeach
        </select><br>

        <input type="date" name="date" id="">   <br>
        <button type="submit">Creer la seance </button>     

</form>