<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectDefinition;
class InitiatingController extends Controller
{
    public function index()
    {
        if (Auth()->User()->roles == 'superadmin'){
            $projectDefinition = projectDefinition::all();
             return view('initiating.index',compact(['projectDefinition']));
        }elseif(Auth()->User()->roles == 'adminInitiating'){
            $projectDefinition = projectDefinition::all();
             return view('initiating.index',compact(['projectDefinition']));
        }else{
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    } 
}
