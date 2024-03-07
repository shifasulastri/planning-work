<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Risk;
use App\Models\ProjectDefinition;

class RiskController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminPlanning') {
            $risks = Risk::all();
            $projectDefinition = ProjectDefinition::all();
            return view('planning.risk.risk', compact('projectDefinition'));
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
        $projectDefinition = ProjectDefinition::all();
        return view('planning.risk.risk', compact('projectDefinition'));
    }

    public function store(Request $request)
    {
        Risk::create([
            'start_date' => $request->start_date,
            'description_ofrisk' => $request->description_ofrisk,
            'submitter' => $request->submitter,
            'name_project' => $request->name_project,
            'probability_factor' => $request->probability_factor,
            'impact_factor' => $request->impact_factor,
            'exposure' => $request->exposure,
            'Risk_reponse_type'=>$request->Risk_reponse_type,
            'Risk_reponse_plan'=>$request->Risk_reponse_plan,
            'impact_description'=>$request->impact_description,
            'assigned_to'=>$request->assigned_to,
            'status'=>$request->status,
            'due_date'=>$request->due_date,
            $request->except(['_token']),
        ]);
        return redirect('/planning')->with('success', 'Risk has been added successfully.');
    }
    

    public function destroy($id)
    {
        $risks = Risk::find($id);
        $risks->delete();
        return redirect('/planning');
    }

    public function show($id)
    {
        $risks = Risk::find($id);
        $projectDefinition = ProjectDefinition::all();
        return view('planning.risk.edit', compact('risks', 'projectDefinition'));
    }

    public function update(Request $request, $id)
    {
        $risks= Risk::find($id);
        $risks->update([
            'start_date' => $request->start_date,
            'description_ofrisk' => $request->description_ofrisk,
            'submitter' => $request->submitter,
            'name_project' => $request->name_project,
            'probability_factor' => $request->probability_factor,
            'impact_factor' => $request->impact_factor,
            'exposure' => $request->exposure,
            'Risk_reponse_type'=>$request->Risk_reponse_type,
            'Risk_reponse_plan'=>$request->Risk_reponse_plan,
            'impact_description'=>$request->impact_description,
            'assigned_to'=>$request->assigned_to,
            'status'=>$request->status,
            'due_date'=>$request->due_date,
            $request->except(['_token']),
        ]);
        return redirect ('/planning');
    }

}
