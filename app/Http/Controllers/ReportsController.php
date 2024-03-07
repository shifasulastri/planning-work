<?php

namespace App\Http\Controllers;

use App\Models\Presentation;
use App\Models\projectAnouncement;
use App\Models\Reports;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        $reports = Reports::all(); 
        return view('planning.communication.index', compact('reports'));
    }

    public function create() 
    {
        $reports = Reports::all(); 
        $presentation = Presentation::all();
        $projectAnouncement = projectAnouncement::all();
        return view('planning.communication.reports', compact('reports','presentation','projectAnouncement'));
    } 

    public function store(Request $request)
    {
        Reports::create([
            'deliverable' => $request->deliverable,
            'description' => $request->description,
            'delivery_method' => $request->delivery_method,
            'frequency' => $request->frequency,
            'owner'=> $request->owner,
            'audience' => $request->audience,
            $request->except(['_token']),
        ]);
        return redirect ('/communication');
    }    

    public function destroy($id){
        $reports = Reports::find($id);
        $reports->delete();
        return redirect('/communication');
    }
    public function show($id)
    {
        $reports = Reports::find($id);
        
        return view('planning.communication.editReport', compact('reports'));
    }

    public function update(Request $request, $id)
    {

        $report = Reports::find($id);
        $report->update([
            'deliverable' => $request->deliverable,
            'description' => $request->description,
            'delivery_method' => $request->delivery_method,
            'frequency' => $request->frequency,
            'owner'=> $request->owner,
            'audience' => $request->audience,
        ]);
        return redirect ('/communication');
    }
}
