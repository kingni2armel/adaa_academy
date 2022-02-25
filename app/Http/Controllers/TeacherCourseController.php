<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\CourseController;
use App\Http\TeacherController;
use App\Http\UserController;
use App\Models\User;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\TeacherCourse;

class TeacherCourseController extends Controller 
{
 
        public function GetPageTC(){
                return view('affecter');
                
        }


    
        public function GetListeTeachers()
        {
            $listeCourse= Course::all();
           $listTeacher = DB::table('users')
            ->join('teachers','users.id','=','teachers.user_id')
            ->select('users.*','teachers.*')
            ->get();
            return view('affecter',['listeteacher'=>$listTeacher,'listecours'=>$listeCourse]); 
        }
        

        public function AffecterCourseTeacher(Request $request)
        {
            
            $request->validate([
                'teacher'=>['required'],
                'course'=>['required']
            ]);

             TeacherCourse::create([
                'teacher_id'=>$request->teacher,
                'course_id'=>$request->course        
            ]);

            die($response);

        }
}
