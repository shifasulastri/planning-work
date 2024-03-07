<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlMonitoringController extends Controller
{
    public function index()
    {
        if (Auth()->User()->roles == 'superadmin'){
            return view('control.index');
        }elseif(Auth()->User()->roles == 'adminControlMonitoring'){
            return view('control.index');
        }else{
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    } 
}
