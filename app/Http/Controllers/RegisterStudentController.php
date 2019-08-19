<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\DB;

class RegisterStudentController extends Controller
{
    use AuthorizesRequests, DispatchesJobs;

    public function index()
    {
        return view('registerStudent');
    }

    public static function register($data)
    {

        $message = "";

        if (DB::table('students')->where('email', '=', $data['email'])->count() > 0 && DB::table('students')->where('name', '=', $data['name'])->count()) {
            $message = "Estudante já cadastrado no sistema";
            return "ERRO";
        }

        if ($data['estudy'] == "Não") {
            $data['time'] = "null";
            $data['change'] = "null";
            $data['schooling'] = "null";
            $data['why'] = "null";
        }


        Student::create([
            "name" => $data['name'],
            "email" => $data['email'],
            "born_date" => $data['date'],
            "age" => $data['age'],
            "phone_number" => $data['phonenumber'],
            "job" => $data['job'],
            "profission" => $data['profession'],
            "study" => $data['study'],
            "schooling" => $data['schooling'],
            "studiedEnglish" => $data['estudy'],
            "studiedTime" => $data['time'],
            "change" => $data['change'],
            "why" => $data['why']
        ]);

        $getIdLastStudentRegistered = Student::where('email', $data['email'])->first();

        $id = (int)$getIdLastStudentRegistered->id;

        return $id;

    }
}
