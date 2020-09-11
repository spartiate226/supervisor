<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    function __construct()
    {
        $this->middleware('guest');
    }
   function login(Request $request){
       
   }
   function logout(){
       Auth::logout();
       return redirect('/');
  }

  function logForm(){
      return view('connexion');
  }

}
