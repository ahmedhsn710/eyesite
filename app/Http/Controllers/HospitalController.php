<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HospitalController extends Controller
{
    public function index(Request $request) {
        return view('hospitals/index', [
            'hospitals' => Hospital::latest()->filter([
                'city' => $request->city, 
                'search' => $request->search
            ])->get(),
            'cities' => DB::table('hospitals')->select('city')->distinct()->get()
        ]);
    }
}
