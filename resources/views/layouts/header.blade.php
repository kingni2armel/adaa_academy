
       <h1>coucou {{auth()->user()->name}}</h1>
<a href="#" onclick="document.getElementById('logout-form').submit()">

        <form action="{{route('logout')}}" method="post" id="logout-form">
                    @csrf
        </form>

        Se deconnecter
</a>


        <a href="{{url('/session')}} ">Creer une session</a>
        <a href="{{url('/listesession')}} ">Liste des sessions</a>