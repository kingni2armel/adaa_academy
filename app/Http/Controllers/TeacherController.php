<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
     /*
                function qui permet d'avoir la page de creation d'un formateur
     */
        public function GetPageCreateTeacher(){
            return view('addformateur');
        }

    /*
            function qui permet de creer un etudiant
    */

        public function CreateTeacher(Request $request){
            $request->validate([
                'name'=>['required','min:5','max:300',],
                'email'=>['required','min:5','max:300',],
                'password'=>['required','min:5','max:300',],

        ]);
        $teacher= User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password
            ]);

            Teacher::create([ 
                    'user_id'=> $teacher->id,
            ]);
        }
    /*

            function qui permet d'avoir la liste des formateurs present dan la base de donnee
    */
        public function GetListeTeacher(){
            $listTeacher = DB::table('users')
            ->join('teachers','users.id','=','teachers.user_id')
            ->select('users.*')
            ->get();
            return view('listeteacher',['listeteacher'=>$listTeacher]);
        }


        /*
                function qui permet de supprimer un utilisateur
        */


        public function DeleteTeacher(Request $request,$id)
        {
            $teacher = Teacher::where('user_id',$id)->delete(); 
        }
}
