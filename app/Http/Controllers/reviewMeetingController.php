<?php

namespace App\Http\Controllers;

use App\Models\reviewMeeting;
use Illuminate\Http\Request;

class reviewMeetingController extends Controller
{
    public function index()
    {
        $reviewMeeting = reviewMeeting::all(); 
        return view('planning.communication.index', compact('reviewMeeting'));
    }

    public function create() 
    {
        return view('planning.communication.reviewMeeting'); 
    } 

    public function store(Request $request)
    {
        reviewMeeting::create([
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
        $reviewMeeting = reviewMeeting::find($id);
        $reviewMeeting->delete();
        return redirect('/communication');
    }
    public function show($id)
    {
        $reviewMeeting = reviewMeeting::find($id);
        
        return view('planning.communication.editReviewMeeting', compact('reviewMeeting'));
    }

    public function update(Request $request, $id)
    {

        $reviewMeeting = reviewMeeting::find($id);
        $reviewMeeting->update([
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
