
        
        
        <form action="{{route('UpdateSession',['id'=>$id=$_GET['id']])}}" method="post">
            @csrf
                    <input type="text" name="intitule" id=""><br>

                    <textarea name ="commentaire" id="" cols="30" rows="10">
                    </textarea>
                    <br>
                    <input type="date" name="date_debut" id=""><br>
                    <input type="date" name="date_fin" id=""><br>
                    <button type="submit">Creer</button><br>


        </form>

        <a href="{{route('indexx',['id'=>$id=$_GET['id']])}}">Creer un travaille pratique</a><br>
        <a href="{{route('GetListePraticalOFid',['id'=>$id=$_GET['id']])}}">Liste des travaux pratiques</a><br> 
        <a href="{{route('GetPageCreateSeance',['id'=>$id=$_GET['id']])}}">Creer une seance</a><br>
        <a href="{{route('GetListeSeance',['id'=>$id=$_GET['id']])}}">liste des seances</a>

