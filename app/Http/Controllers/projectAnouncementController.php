<?php

namespace App\Http\Controllers;

use App\Models\projectAnouncement;
use Illuminate\Http\Request;

class projectAnouncementController extends Controller
{
    public function index()
    {
        $projectAnouncement = projectAnouncement::all(); 
        return view('planning.communication.index', compact('projectAnouncement'));
    }

    public function create() 
    {
        return view('planning.communication.projectAnouncement');
    } 

    public function store(Request $request)
    {
        projectAnouncement::create([
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
        $projectAnouncement = projectAnouncement::find($id);
        $projectAnouncement->delete();
        return redirect('/communication');
    }
    public function show($id)
    {
        $projectAnouncement = projectAnouncement::find($id);
        
        return view('planning.communication.editProjectAnouncement', compact('projectAnouncement'));
    }

    public function update(Request $request, $id)
    {

        $projectAnouncement = projectAnouncement::find($id);
        $projectAnouncement->update([
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
