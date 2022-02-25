<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dayli;
use App\Models\Student;
use App\Models\User;
use App\Models\Session;
use App\Models\SessionStudent;
use App\Models\StudentDayli;

class StudentDayliController extends Controller
{
        public function GetpageAffecter(){     

        /*    requette qui permet d'avoir les 
              id des students inscit a la session qui comporte le cour 
        */
            $id=$_GET['id'];   
            $nom  = DB::table('session_students')
            ->join('students','session_students.student_id','=','students.id')
            ->join('users','users.id','=','students.user_id')
            ->where('session_students.sesson_id', $id)
            ->select('users.*')
            ->get();
        /*
                requette qui permet d'avoir le nom du cour
        */
            $nomducour= DB::table('courses')
            ->join('sessions','courses.id','=','sessions.course_id')
            ->where('sessions.id',$id)
            ->select('courses.*')
            ->get();

        /*
                requette pour avoir le cour de la session en pour
        */
             return view('affecterpresence',['listestudent'=>$nom]);
        }


        public function AffecterStatut(Request $request,$id)

        {
                // $id=$_GET['id'];
                $course = Session::where('id',$id)->get();
                $request->validate([
                        'namestudent'=>['required'],
                ]);

                $statut= StudentDayli::create([
                        'student_id'=>$request->namestudent,
                        'dayli_id'=>$id
                ]);
        }


  

     
   
}
