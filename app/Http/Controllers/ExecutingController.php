<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExecutingController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminExecuting' || Auth()->user()->roles == 'projectManager') {
            return view('executing.index');
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
        
    } 
}
