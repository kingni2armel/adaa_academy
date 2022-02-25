
<a href="#" onclick="document.getElementById('logout-form').submit()">


        <form action="{{route('logout')}}" method="post" id="logout-form">
                    @csrf
        </form>

        Se deconnecter
</a>
<a href="{{url('/session')}} ">Creer une session</a>
        <a href="{{url('/listesession')}} ">Liste des sessions</a>

<h1>creation d'une session</h1>
        @if($errors->any()){
            @foreach($errors->all() as $error)
                 <div class="text-red-500">
                            {{$error}}
                 </div>
            @endforeach
    } 

    @endif

        <form action="{{route('CreateSession')}}" method="post">
            @csrf
                        <p>nom</p>
                    <input type="text" name="intitule" id=""><br>
                    <p>commentaire</p>
                    <textarea  name="commentaire" id="" cols="30" rows="10">
                        
                     </textarea> <br>
                <p>date debut</p>
                    <input type="date" name="date_debut" id=""><br>
                <p>date fin</p>
                    <input type="date" name="date_fin" id=""><br>
                    <p>cour</p>
                <select name="cour" id="">
                        @foreach($course as $listecour)
                                        <option value="{{$listecour->id}}">{{$listecour->nom}}</option>
                        @endforeach
                </select>
                    <button type="submit">Creer</button>



        </form>