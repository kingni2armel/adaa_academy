<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;

class SessionController extends Controller
{


// function qui renvoie la page de creation d'une session

    public function session(){
        return view('session');
    }


// funtion qui permet la creation d'une session

    public function CreateSession(Request $request){

                $request->validate([
                    'intitule' => ['required','min:5','max:300',],
                    'commentaire'=>['required','min:5','max:10000',],
                    'date_debut'=>['required'],
                    'date_fin'=>['required'],

                ]);
                Session::create([
                    'intitule'=>$request->intitule,
                    'commentaire'=>$request->commentaire,
                    'date_debut'=>$request->date_debut,
                    'date_fin'=>$request->date_fin,

                ]);
           //     return $request->input();

         
    }   

     // function qui permet d'avoir toute les sessions presentes dans la base de donnee

        public function GetAllSession(){
                $listeSession= Session::all();
                return view('listesession',['listesession'=>$listeSession]);
        }



   //function qui permet la mise a jour d'une session

                public function show(){ 
                        return view('update');
                }

                public function UpdateSession(Request $request,$id){
                        $update= Session::find($id);               
                        $update->update([
                            'intitule'=>$request->intitule,
                            'commentaire'=>$request->commentaire,
                            'date_debut'=>$request->date_debut,
                            'date_fin'=>$request->date_fin,    
                        ]);

                }

                public function DeleteSession(Request $request,$id){
                            $delete= Session::find($id);

                            $delete->delete([
//'id'=>$request->$delete;
                            ]);
                }
}
