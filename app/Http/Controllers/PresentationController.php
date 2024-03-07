<?php

namespace App\Http\Controllers;

use App\Models\Presentation;
use Illuminate\Http\Request;

class PresentationController extends Controller
{
    public function index()
    {
        $presentation = Presentation::all(); 
        return view('planning.communication.index', compact('presentation'));
    }


    public function create()
    {
        return view('planning.communication.presentation');
    } 

    public function store(Request $request)
    {
        Presentation::create([
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
        $presentations = Presentation::find($id);
        $presentations->delete();
        return redirect('/communication');
    }
    public function show($id)
    {
        $presentation = Presentation::find($id);
        
        return view('planning.communication.editPresentation', compact('presentation'));
    }


    public function update(Request $request, $id)
    {

        $presentations = Presentation::find($id);
        $presentations->update([
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
