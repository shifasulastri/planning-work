<?php

namespace App\Http\Controllers;

use App\Models\BebanBarang;
use Illuminate\Http\Request;

class BebanBarangController extends Controller
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
        BebanBarang::create([
            'procurement' => $request->procurement,
            'vendor' => $request->vendor,
            'description_service' => $request->description_service,
            'volume' => $request->volume,
            'units' => $request->units,
            'total' => $request->total,
            $request->except(['_token']),
        ]);
        return redirect('/planning')->with('success', 'Risk has been added successfully.');
    }
    

    public function destroy($id)
    {
        $bebanbarang = BebanBarang::find($id);
        $bebanbarang->delete();
        return redirect('/planning');
    }

    public function show($id)
    {
        $bebanbarang = BebanBarang::find($id);
        return view('planning.procurement.editBebanbahan', compact('bebanbarang'));
    }

    public function update(Request $request, $id)
    {
        $bebanbarang= BebanBarang::find($id);
        $bebanbarang->update([
            'procurement' => $request->procurement,
            'vendor' => $request->vendor,
            'description_service' => $request->description_service,
            'volume' => $request->volume,
            'units' => $request->units,
            'total' => $request->total,
            $request->except(['_token']),
        ]);
        return redirect ('/planning');
    }
}
