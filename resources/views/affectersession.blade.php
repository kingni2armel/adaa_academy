<form action="{{route('AffecterSession')}}" method="post">
    @csrf
            <h1>nom de la session</h1>
            <select name="nomsession" id="">

            @foreach($listesession  as $listeSession)
                <option value="{{$listeSession->id}}">{{$listeSession->intitule}}</option>

          @endforeach
            </select><br>

            <h1>Nom de l'etudiant</h1>

            <select name="nomstudent" id="">
                @foreach($listestudent as $listeStudent)
                    <option value="{{$listeStudent->id}}">{{$listeStudent->name}}</option>
                @endforeach
            </select><br>

            <button type="submit">Affecter</button>

</form>