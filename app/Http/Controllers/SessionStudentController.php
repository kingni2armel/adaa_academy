<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Session;
Use App\Models\Student;
use App\Models\User;
use App\Models\SessionStudent;
use App\Http\SessionController;
use App\Http\StudentController;
use App\Http\UserController;
use Illuminate\Support\Facades\DB;

class SessionStudentController extends Controller
{

            public function GetP()
            {
                return view('affectersession');
            }

            public function GetListeSessionAndStudent()
            {
                    $listeSession = Session::all();
                    $listeStudent = DB::table('users')
                    ->join('students','users.id','=','students.user_id')
                    ->select('users.*','students.*')
                    ->get();
                    return view('affectersession',['listestudent'=>$listeStudent,'listesession'=>$listeSession]);

            }

            public function AffecterSession(Request $request)
            {
                $request->validate([
                        'nomsession'=>['required'],
                        'nomstudent'=>['required']
                ]);
                 SessionStudent::create([
                        'sesson_id'=>$request->nomsession,
                        'student_id'=>$request->nomstudent
                ]);
            }


        
}
