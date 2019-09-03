<?php

namespace App\Http\Controllers;

use App\Student;

class ManipulationStudentController extends Controller
{
    public function index()
    {
        $students = $this->getStudents();
        return view('registeredStudents', ['students' => $students]);
    }

    public function getStudents()
    {
        $data = Student::all();
        return $data;
    }
}
