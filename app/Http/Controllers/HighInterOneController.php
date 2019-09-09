<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class HighInterOneController extends Controller
{
    public function index()
    {
        return view('high_inter_one', ["students" => Student::all()]);
    }

    function getResults(Request $request)
    {
        dd($request->all());
    }


}
