
    @if($errors->any()){
            @foreach($errors->all() as $error)
                 <div class="text-red-500">
                            {{$error}}
                 </div>
            @endforeach
    } 

    @endif
<form action="{{route('CreateTeacher')}}" method="post">
    @csrf
    <input  type="text"name="name" id=""><br>
    <input  type="text"name="email" id=""><br>
    <input  type="password"name="password" id=""><br>
    <button type="submit">Creer</button>

</form>