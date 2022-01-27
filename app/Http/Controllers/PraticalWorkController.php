<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PraticalWork;
//use App\Models\Session;

class PraticalWorkController extends Controller
{
    //

    public function indexx(){
        return view('travauxpratique');
    }

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

    

}