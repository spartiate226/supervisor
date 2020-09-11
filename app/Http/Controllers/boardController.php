<?php

namespace App\Http\Controllers;

use App\emploi;
use Illuminate\Http\Request;

class boardController extends Controller
{
    function voirEmploi($niveau='blank',$emploi=null){
        if ($emploi==null && $niveau!='blank') {
            return view('emploi',['emploi'=>emploi::where('niveau_id',$niveau)->orderBy('id','desc')->first()]);
        }
        if ($niveau=='blank' && $emploi!=null) {
            return view('emploi',['emploi'=>emploi::find($emploi)]);
        }
    }
}
