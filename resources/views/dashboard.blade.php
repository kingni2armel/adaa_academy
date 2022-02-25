


        <form action="{{route('logout')}}" method="post" id="logout-form">
                    @csrf
        </form>

        <a href=""> Se deconnecter</a>
</a><br>


        <a href="{{url('/session')}} ">Creer une session</a><br>
        <a href="{{url('/listesession')}} ">Liste des sessions</a><br>
        <a href="{{url('/creation')}} ">Creer un cour</a><br>
        <a href="{{url('listecour')}}">liste des cours</a><br>
        <a href="{{url('addstudent')}}">Creer un etudiant</a><br>
        <a href="{{url('listestudent')}}">Liste des etudiants</a><br>
        <a href="{{url('addteacher')}}">Creer un formateur</a><br>
        <a href="{{url('listeteacher')}}">Liste des formateurs</a><br>
        <a href="{{url('affectercour')}}">Affecter un cour a un formateur</a><br>
        <a href="{{url('affectersession')}}">attribuer une session a un etudiant</a>





