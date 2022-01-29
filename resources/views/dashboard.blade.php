
       <h1>coucou {{auth()->user()->name}}</h1>
<a href="#" onclick="document.getElementById('logout-form').submit()">

        <form action="{{route('logout')}}" method="post" id="logout-form">
                    @csrf
        </form>

        Se deconnecter
</a><br>


        <a href="{{url('/session')}} ">Creer une session</a><br>
        <a href="{{url('/listesession')}} ">Liste des sessions</a><br>
        <a href="{{url('/creation')}} ">Creer un cour</a><br>
        <a href="{{url('listecour')}}">liste des cours</a><br>
        <a href="{{url('addstudent')}}">Creer un etudiant</a><br>
        <a href="{{url('listestudent')}}">Liste des etudiants</a>




