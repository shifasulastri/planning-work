<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectDefinition;
use PDF;

class ReportController extends Controller
{
    public function index()
    {
        if (Auth()->User()->roles == 'superadmin'){
        $projectDefiniton = ProjectDefinition::all();
            return view('home.report')->with('projectDefinition', $projectDefiniton);
        }else{
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function printPDF()
    {
        // Ambil data yang diperlukan
        $projectDefinition = ProjectDefinition::all(); // Contoh pengambilan data dari model Project

        // Render view ke dalam HTML
        $html = view('home.report-pdf', compact('projectDefinition'))->render();

        // Buat PDF dengan Dompdf
        $pdf = PDF::loadHTML($html);

        // Return atau unduh PDF
        return $pdf->stream('report.pdf');
        // return $pdf->download('report.pdf')->setOptions(['defaultFont' => 'sans-serif']);
    }
}
