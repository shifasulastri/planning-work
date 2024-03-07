<?php

namespace App\Http\Controllers;

use App\Models\TermPlan;
use Illuminate\Http\Request;

class TermPlanController extends Controller
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
        TermPlan::create([
            'term_type' => $request->term_type,
            'value_term' => $request->value_term,
            'value_rp_term' => $request->value_rp_term,
            'month_plan' => $request->month_plan,
            'option_available' => $request->option_available,
            $request->except(['_token']),
        ]);
        return redirect('/planning')->with('success', 'Risk has been added successfully.');
    }
    

    public function destroy($id)
    {
        $termplan = TermPlan::find($id);
        $termplan->delete();
        return redirect('/planning');
    }

    public function show($id)
    {
        $termplan = TermPlan::find($id);
        return view('planning.procurement.editTermPlan',compact('termplan'));
    }

    public function update(Request $request, $id)
    {
        $termplan= TermPlan::find($id);
        $termplan->update([
            'term_type' => $request->term_type,
            'value_term' => $request->value_term,
            'value_rp_term' => $request->value_rp_term,
            'month_plan' => $request->month_plan,
            'option_available' => $request->option_available,
            $request->except(['_token']),
        ]);
        return redirect ('/planning');
    }
}
