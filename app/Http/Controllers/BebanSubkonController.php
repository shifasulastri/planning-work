<?php

namespace App\Http\Controllers;

use App\Models\BebanSubkon;
use Illuminate\Http\Request;

class BebanSubkonController extends Controller
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
        BebanSubkon::create([
            'procurement_subkon' => $request->procurement_subkon,
            'vendor_subkon' => $request->vendor_subkon,
            'description_service_subkon' => $request->description_service_subkon,
            'volume_subkon' => $request->volume_subkon,
            'units_subkon' => $request->units_subkon,
            'total_subkon' => $request->total_subkon,
            $request->except(['_token']),
        ]);
        return redirect('/planning')->with('success', 'Risk has been added successfully.');
    }
    

    public function destroy($id)
    {
        $bebansubkon = BebanSubkon::find($id);
        $bebansubkon->delete();
        return redirect('/planning');
    }

    public function show($id)
    {
        $bebansubkon = BebanSubkon::find($id);
        return view('planning.procurement.editBebanSubkon', compact('bebansubkon'));
    }

    public function update(Request $request, $id)
    {
        $bebansubkon= BebanSubkon::find($id);
        $bebansubkon->update([
            'procurement_subkon' => $request->procurement_subkon,
            'vendor_subkon' => $request->vendor_subkon,
            'description_service_subkon' => $request->description_service_subkon,
            'volume_subkon' => $request->volume_subkon,
            'units_subkon' => $request->units_subkon,
            'total_subkon' => $request->total_subkon,
            $request->except(['_token']),
        ]);
        return redirect ('/planning');
    }
}
