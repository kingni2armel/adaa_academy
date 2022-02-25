<form action="{{route('AffecterCourseTeacher')}}" method="post">
    @csrf
                <h1>Affecter un cour a un teacher</h1>
                <select name="teacher">
                    @foreach ($listeteacher as $liste)
                    
                        <option  value="{{$liste->id}}">{{$liste->name}}</option>
                    @endforeach   
                   
                </select><br>   

                <select name="course">
                @foreach ($listecours as $listes)
                        <option value="{{$listes->id}}">{{$listes->nom}}</option>

                    @endforeach  
                </select><br>

                <button type="submit">Affecter</button>
                     
</form>


