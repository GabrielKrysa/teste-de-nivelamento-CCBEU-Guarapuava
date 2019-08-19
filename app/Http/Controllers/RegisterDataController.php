<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterDataController extends Controller
{
    public function register(Request $request)
    {
        $Alldata = $request->all();

        dd($Alldata);

        $getIdLastStudentRegistered = RegisterStudentController::register($Alldata);
        if (!(is_numeric($getIdLastStudentRegistered))) {
            $message = "Nome e endereço de e-mail já cadastrado no sistema";
            return redirect()->back()->with('alertDontOK', $message);
        }

        $result = RegisterStudentAddressController::register($Alldata, $getIdLastStudentRegistered);

        if ($result) {
            $message = "Estudante registrado com sucesso no sistema";
            return redirect()->back()->with('alertOK', $message);
        }

    }
}
