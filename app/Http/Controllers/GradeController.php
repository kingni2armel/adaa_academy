<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\PraticalWork;
use App\Models\SessionStudent;
use App\Models\User;
use App\Models\Student;

class GradeController extends Controller
{
    //

    public function getpage(){

        /*
                recuperation de l'id du travaille pratique
        */
        $id= $_GET['id'];
        /*
            requette qui permet de recuper le nom etudiants  qui peuvent avoir une note pour le
            pratical work
        */
        $sessionid = PraticalWork::where('id',$id)
        ->select('session_id')
        ->get();  
        $ids= $sessionid->first();
        $ids =$ids->session_id;   
        $nom  = DB::table('session_students')
        ->join('students','session_students.student_id','=','students.id')
        ->join('users','users.id','=','students.user_id')
        ->where('session_students.sesson_id',$ids)
        ->select('users.*','students.*')
        ->get();
        return view('DonnerNote',['nom'=>$nom]);   

    }

    public function GiveGrade(Request $request,$id)
    {
        $request->validate([
            'nomStudent'=>['required'],
            'valeur'=>['required'],
        ]);
        $creationDuGrade = Grade::create([
                'travaux_id'=>$id,
                'student_id'=>$request->nomStudent,
                'valeur'=>$request->valeur
        ]);
        
    }


    public function UpdateNote(Request $request,$id)

    {
            $request->validate([
                    'nom'=>$request->nom
            ]);


            
    }
}
