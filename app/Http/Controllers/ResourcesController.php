<?php

namespace App\Http\Controllers;

use App\Models\Resources;
use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminPlanning') {
            return view('planning.resources.resources');
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create() 
    {
        return view('planning.resources.resources'); 
    } 

    public function store(Request $request)
    {
        Resources::create([
            'name' => $request->name,
            'duration' => $request->duration,
            'position' => $request->position,
            'status' => $request->status,
            $request->except(['_token']),
        ]);
        return redirect ('/planning');
    }    

    public function destroy($id){
        $resources = Resources::find($id);
        $resources->delete();
        return redirect('/planning');
    }
    public function show($id)
    {
        $resources = Resources::find($id);
        return view('planning.resources.edit');
    }

    public function update(Request $request, $id)
    {

        $resources = Resources::find($id);
        $resources->update([
            'name' => $request->name,
            'duration' => $request->duration,
            'position' => $request->position,
            'status' => $request->status,
            $request->except(['_token']),
        ]);
        return redirect ('/planning');
    }
}
