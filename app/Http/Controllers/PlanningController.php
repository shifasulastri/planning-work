<?php

namespace App\Http\Controllers;

use App\Models\BebanBarang;
use App\Models\BebanSubkon;
use App\Models\Procurement;
use App\Models\scope;
use App\Models\Stakeholder;
use App\Models\TermPlan;
use Illuminate\Http\Request;
use App\Models\Risk;
use App\Models\quality;

class PlanningController extends Controller
{
    public function index()
    {
        if (Auth()->User()->roles == 'superadmin'){
            $risks = Risk::all();
            $scope = scope::all();
            $stakeholder = Stakeholder::all();
            $quality = quality::all();
            $procurement = Procurement::all();
            $bebanbarang = BebanBarang::all();
            $bebansubkon = BebanSubkon::all();
            $termPlan = TermPlan::all();
            $quality = quality::all();
            return view('planning.index', compact('risks', 'scope', 'stakeholder', 'quality','procurement','bebanbarang','bebansubkon','termPlan','quality'));
        }elseif(Auth()->User()->roles == 'adminPlanning'){
            $risks = Risk::all();
            $scope = scope::all();
            $stakeholder = Stakeholder::all();
            $quality = quality::all();
            $procurement = Procurement::all();
            $bebanbarang = BebanBarang::all();
            $bebansubkon = BebanSubkon::all();
            $termPlan = TermPlan::all();
            $quality = quality::all();
            return view('planning.index', compact('risks', 'scope', 'stakeholder', 'quality','procurement','bebanbarang','bebansubkon','termPlan','quality'));
        }else{
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }
}
