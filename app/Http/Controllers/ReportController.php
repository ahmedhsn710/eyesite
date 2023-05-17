<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index() {
        return view('reports/index', [
            'reports' => auth()->user()->reports()->get()
        ]);
    }

    public function store(Request $request) {
        $reportData = $request->validate([
            'test_type' => 'required',
            'result' => 'required',
            'score' => 'required|min:0|max:10'
        ]);
        $reportData['user_id'] = auth()->id();
        Report::create($reportData);

        return redirect('/reports');
    }
}
