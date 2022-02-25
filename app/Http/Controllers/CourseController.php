<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class CourseController extends Controller
{
    //

    /*
            function qui permet de renvoyer la page de creation d'un cour
    */

    public function __invoke()
    {

    }

    public function GetPage()
    {
            return view('addcourse');
    }



    /*
                function qui permet de renvoyer vers la page de modification de la session
    */


    public function GetPageUpdateCourse()
    {
          return view('updatecourse');
    }

    /*

            function qui permet de renvoyer la liste des cours present en base de donnnee

    */
    public function  GetPageListeCouser()
    {
            return view('listecours');
    }

    /*
                function qui permet de creer un cour


    */

    public function CreateCourse(Request $request)
    {
            $request->validate([
                'nom'=> ['required','min:5','max:300'],
                'commentaire'=> ['required','min:5','max:300'],
            ]);

            Course::create([
                'nom'=>$request->nom,
                'commentaire'=>$request->commentaire
            ]);
    }

    /*
                    functionn qui permet de faire la modification d'un cour

    */

    public function UpdateCourse(Request $request,$id)
    {
        $request->validate([
            'nom' => ['required','min:5','max:300',],
            'commentaire'=>['required','min:5','max:10000',],
        ]);
        $update= Course::find($id);               
        $update->update([
            'nom'=>$request->nom,
            'commentaire'=>$request->commentaire,
              
        ]);
    }


    /*
                funtion    qui permet d'avoir tout la liste des cours presents dans la base de donnee
    */

    public function GetListeCourses()
    {
         return  $listeCourses= Course::all();
    }

    /*
                funtion    qui permet d'avoir tout la liste des cours presents dans la base de donnee et envoyer a la page
    */

    public function GetListeCourse()
    {
            $listeCourse= Course::all();
            return view('listecours',['listecours'=>$listeCourse]);
    }

    /*
        function qui permet de supprimer un cour
    */


    public function DeleteCourse(Request $request,$id){
         $course = Course::find($id);
         $course->delete();
      //  return view('listecours');
    }


 
}
