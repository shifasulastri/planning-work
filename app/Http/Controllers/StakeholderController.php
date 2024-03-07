<?php

namespace App\Http\Controllers;

use App\Models\Stakeholder;
use Illuminate\Http\Request;

class StakeholderController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminPlanning') {
            return view('planning.stakeholder.stakeholder');
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
        return view('planning.stakeholder.stakeholder');
    }

    public function store(Request $request)
    {
        Stakeholder::create([
            'stakeholder' => $request->stakeholder,
            'role' => $request->role,
            'power' => $request->power,
            'interest' => $request->interest,
            'initiation' => $request->initiation,
            'planning' => $request->planning,
            'executing' => $request->executing,
            'control' => $request->control,
            'close' => $request->close,
            'engagement_level' => $request->engagement_level,
            $request->except(['_token']),
        ]);
        return redirect('/planning');
    }
    

    public function destroy($id)
    {
        $stakeholder = Stakeholder::find($id);
        $stakeholder->delete();
        return redirect('/planning');
    }

    public function show($id)
    {
        $stakeholder = Stakeholder::find($id);
        return view('planning.stakeholder.edit', compact(('stakeholder')));
    }

    public function update(Request $request, $id)
    {
        $stakeholder= Stakeholder::find($id);
        $stakeholder->update([
            'stakeholder' => $request->stakeholder,
            'role' => $request->role,
            'power' => $request->power,
            'interest' => $request->interest,
            'initiation' => $request->initiation,
            'planning' => $request->planning,
            'executing' => $request->executing,
            'control' => $request->control,
            'close' => $request->close,
            'engagement_level' => $request->engagement_level,
            $request->except(['_token']),
        ]);
        return redirect ('/planning');
    }
}
