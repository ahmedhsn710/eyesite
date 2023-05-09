<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index(Request $request) {
        return view('hospitals/index', [
            'hospitals' => Hospital::latest()->filter(['city' => $request->city])->get()
        ]);
    }
}
