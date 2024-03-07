<?php

namespace App\Http\Controllers;

use App\Models\schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminPlanning') {
            return view('planning.schedule.schedule');
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
        return view('planning.schedule.schedule');
    }

    public function store(Request $request)
    {
        schedule::create([
            'task' => $request->task,
            'start_date' => $request->start_date,
            'finish_date' => $request->finish_date,
            'description_task' => $request->description_task,
            'assign_to' => $request->assign_to,
            $request->except(['_token']),
        ]);
        return redirect('/planning')->with('success', 'Risk has been added successfully.');
    }
    

    public function destroy($id)
    {
        $schedule = schedule::find($id);
        $schedule->delete();
        return redirect('/planning');
    }

    public function show($id)
    {
        return view('planning.schedule.edit');
    }

    public function update(Request $request, $id)
    {
        $schedule= schedule::find($id);
        $schedule->update([
            'task' => $request->task,
            'start_date' => $request->start_date,
            'finish_date' => $request->finish_date,
            'description_task' => $request->description_task,
            'assign_to' => $request->assign_to,
            $request->except(['_token']),
        ]);
        return redirect ('/planning');
    }
}
