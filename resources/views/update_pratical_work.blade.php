
<h1>Modification d'un travail pratique</h1>
        @if($errors->any()){
            @foreach($errors->all() as $error)
                 <div class="text-red-500">
                            {{$error}}
                 </div>
            @endforeach
    } 

    @endif

        <form action="{{route('UpdatePraticalWork',['id'=>$id=$_GET['id']])}}" method="post">
                  @csrf
                            <textarea  name="intitule" id="" cols="30" rows="10">
                            
                            </textarea> <br>
                                <input type="date" name="dateModification" id=""><br>

                            <button type="submit">Creer</button>



        </form>

