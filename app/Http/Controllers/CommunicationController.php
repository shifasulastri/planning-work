<?php

namespace App\Http\Controllers;

use App\Models\Presentation;
use App\Models\projectAnouncement;
use App\Models\Reports;
use App\Models\reviewMeeting;
use App\Models\teamMorale;
use Illuminate\Http\Request;

class CommunicationController extends Controller
{
    public function index()
    { 
        $reports = Reports::all(); 
        $presentation = Presentation::all();
        $projectAnouncement = projectAnouncement::all();
        $reviewMeeting = reviewMeeting::all();
        $teamMorale = teamMorale::all();
        return view('planning.communication.index', compact('reports','presentation','projectAnouncement','reviewMeeting','teamMorale'));
    }
}
