
        
        
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

        <a href="{{route('indexx',['id'=>$id=$_GET['id']])}}">Creer un travaille pratique</a>
