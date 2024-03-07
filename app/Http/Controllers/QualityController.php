<?php

namespace App\Http\Controllers;

use App\Models\quality;
use Illuminate\Http\Request;

class QualityController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminPlanning') {
            return view('planning.quality.quality');
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
        
        return view('planning.quality.quality');
    }

    public function store(Request $request)
    {
        quality::create([
            'requirements' => $request->requirements,
            'category' => $request->category,
            $request->except(['_token']),
        ]);
        return redirect('/planning')->with('success', 'Risk has been added successfully.');
    }
    

    public function destroy($id)
    {
        $quality = quality::find($id);
        $quality->delete();
        return redirect('/planning');
    }

    public function show($id)
    {
        $quality = quality::find($id);
        return view('planning.quality.edit', compact('quality'));
    }

    public function update(Request $request, $id)
    {
        $quality= quality::find($id);
        $quality->update([
            'requirements' => $request->requirements,
            'category' => $request->category,
            $request->except(['_token']),
        ]);
        return redirect ('/planning');
    }
}
