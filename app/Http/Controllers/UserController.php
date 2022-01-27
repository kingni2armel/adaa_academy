<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
            public function login( )
            {
                return view('auth.login');
            }

                  public function authenticate(Request $request){
                    $request->validate([
                        'email' => 'required|email',
                        'password'=>'required'  
                    ]);

                   
                    if(auth()->attempt($request->only('email','password')))
                                    {
                                     return  redirect()->route('dashboard');
                                   }
                        return redirect()->back()->withErrors('Les identifiants ne correspondent pas'); 

                    }
                
}
