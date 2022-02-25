<form action="{{route('CreateCourse')}}" method="post">
    @csrf
    <input type="text"name="nom" id=""><br>
    <textarea name="commentaire" id="" cols="30" rows="10">

    </textarea> <br>

    <button type="submit">Creer </button>

</form>