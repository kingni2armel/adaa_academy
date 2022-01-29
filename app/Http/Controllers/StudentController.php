<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;

class StudentController extends Controller
{
    //

        public function GetPageCreateStudent(){
                    
                    return view ('addstudent');
        }


        public function CreateStudent(Request $request)
        {
                $request->validate([
                        'name'=>['required','min:5','max:300',],
                        'email'=>['required','min:5','max:300',],
                        'password'=>['required','min:5','max:300',],

                ]);
                $user= User::create([
                        'name'=>$request->name,
                        'email'=>$request->email,
                        'password'=>$request->password
                    ]);
 
                Student::create([ 
                        'user_id'=> $user->id,
                ]);

               

        }

        /*
                        function qui permet de renvoyer la liste des etudiants present dans le systeme
                        
        */
        public function GetListeStudent(){
            $listUserStudent = DB::table('users')
            ->join('students','users.id','=','students.user_id')
            ->select('users.*')
            ->get();
            return view('listestudent',['listestudent'=>$listUserStudent]);
        }


    
    
   
}
