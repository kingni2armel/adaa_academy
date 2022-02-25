<form action="{{route('AffecterStatut',['id'=>$id=$_GET['id']])}}" method="post">
        @csrf
<p>nom des etudiants</p>
<select name="namestudent" id="">
@foreach($listestudent as $liste)
        <option value="{{$liste->id}}">{{$liste->name}}</option>
@endforeach
</select><br>

<button type="submit">submit</button>
</form>

   