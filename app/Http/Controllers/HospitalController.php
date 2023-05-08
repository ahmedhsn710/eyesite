<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index() {
        return view('hospitals/index', [
            'hospitals' => Hospital::latest()->get()
        ]);
    }
}
