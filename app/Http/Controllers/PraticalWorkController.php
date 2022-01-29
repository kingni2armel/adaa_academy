<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PraticalWork;
//use App\Models\Session;

class PraticalWorkController extends Controller
{
           /*
           function qui renvoie la page pour creer les praticals works
           */
                public function indexx(){
                    return view('travauxpratique');
                }


           /*
           function quirenvoie la page  pour la  modification des praticals works
           */      
               public function GetPageUpdatePraticalWork(){
                    return view('update_pratical_work');
                }

            /* 
            fuction qui permet de creer un pratical work
            @param $id : est l'id de la session dans la quelle doit etre cree le pratical work

            */
                public function CreatePraticalWork(Request $request,$id)
              {
                  //  $id=$_GET($id); 
                    $request->validate([
                    'intitule' => ['required','min:5','max:300'],
                    'datecreation'=>['required'],
                    ]);
                    PraticalWork::create([
                        'session_id'=>$id,
                        'intitule'=>$request->intitule,
                        'date'=>$request->datecreation,
                    
                    ]);
                  }
    /* 
    la requete qui recupere tout les travaux pratiques qui sont dans la base de donnee
    */

                public function GetListePraticalWork()
                {
                    $listeTravauxPratique=PraticalWork::all();
                    return view('listetravaux',['listetravauxpratique'=>$listeTravauxPratique]);
                 }
        /* 
        
        la requette qui recupere tout les travaux present dans la base de donnee en fonction de la session

        */   


                public function GetListePraticalOFid($id)
                {
                            $listeTravauxPratique = PraticalWork::where('session_id',$id)->get();
                            return view('listetravaux',['listetravauxpratique'=>$listeTravauxPratique]);
                    }
        /* 
           la function qui permet de modifier un pratical work

           @param $id: est l'id du pratical work que l'on veut modifier

        */
                  public function UpdatePraticalWork( Request $request,$id){
                            $update=PraticalWork::find($id);
                            $update->update([
                                'intitule'=>$request->intitule,
                                'date'=>$request->dateModification    

                            ]);
                }

    

}