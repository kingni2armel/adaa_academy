<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\UserController;
use App\Http\CourseController;
use App\Http\SessionController;
use App\Models\Course;
use App\Models\Session;
use App\Models\User;
use App\Models\Dayli;

class DayliController extends Controller

{

        public function  GetPageCreateSeance()
        
        {
            $a= Course::all();
            return view('createseance',['listeS'=>$a]);
        }


        public function CreateSeance(Request $request,$id)

        {
                $request->validate([
                    'nomcour'=>['required'],
                    'date'=>['required']
                ]);
                Dayli::create([
                    'course_id'=>$request->nomcour,
                    'session_id'=>$id,
                    'date'=>$request->date

                ]);
        }

        public function GetListeSeance(){
             $id= $_GET['id'];
            $listeSeance = Dayli::where('session_id',$id)->get();
            return view('listeseance',['listeseance'=>$listeSeance]);
        }
}