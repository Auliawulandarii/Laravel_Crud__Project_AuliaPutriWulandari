<?php

namespace App\Http\Controllers;
use App\Models\extracurricular;

use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    public function index()
    {
        return view ('extracurricular', [
            "title" => "extracurricular",
           "extra" => extracurricular::all()
            
        ]);
    }
}
