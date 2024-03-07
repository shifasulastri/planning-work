<?php

namespace App\Http\Controllers;

use App\Models\scope;
use Illuminate\Http\Request;

class ScopeController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminPlanning') {
            return view('planning.scope.scope');
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
        return view('planning.scope.scope');
    }

    public function store(Request $request)
    {
        scope::create([
            'technical_requirements' => $request->technical_requirements,
            'perfomance_requirements' => $request->perfomance_requirements,
            'bussines_requirements' => $request->bussines_requirements,
            'regulatory_requirements' => $request->regulatory_requirements,
            'user_requirements' => $request->user_requirements,
            'system_requirements' => $request->system_requirements,
            $request->except(['_token']),
        ]);
        return redirect('/planning')->with('success', 'Risk has been added successfully.');
    }
    

    public function destroy($id)
    {
        $scope = scope::find($id);
        $scope->delete();
        return redirect('/planning');
    }

    public function show($id)
    {
        $scope = scope::find($id);
        return view('planning.scope.edit', compact('scope'));
    }

    public function update(Request $request, $id)
    {
        $scope= scope::find($id);
        $scope->update([
            'technical_requirements' => $request->technical_requirements,
            'perfomance_requirements' => $request->perfomance_requirements,
            'bussines_requirements' => $request->bussines_requirements,
            'regulatory_requirements' => $request->regulatory_requirements,
            'user_requirements' => $request->user_requirements,
            'system_requirements' => $request->system_requirements,
            $request->except(['_token']),
        ]);
        return redirect ('/planning');
    }

}
