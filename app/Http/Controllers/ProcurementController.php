<?php

namespace App\Http\Controllers;

use App\Models\Procurement;
use Illuminate\Http\Request;

class ProcurementController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminPlanning') {
            return view('planning.procurement.procurement');
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
        return view('planning.procurement.procurement');
    }

    public function store(Request $request)
    {
        Procurement::create([
            'value' => $request->value,
            'contract_value' => $request->contract_value,
            $request->except(['_token']),
        ]);
        return redirect('/planning')->with('success', 'Risk has been added successfully.');
    }
    

    public function destroy($id)
    {
        $procurement = Procurement::find($id);
        $procurement->delete();
        return redirect('/planning');
    }

    public function show($id)
    {
        $procurement = Procurement::find($id);
        return view('planning.procurement.editCostContract', compact('procurement'));
    }

    public function update(Request $request, $id)
    {
        $procurement= Procurement::find($id);
        $procurement->update([
            'value' => $request->value,
            'contract_value' => $request->contract_value,
            $request->except(['_token']),
        ]);
        return redirect ('/planning');
    }
}
