<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterDataController extends Controller
{
    public function register(Request $request)
    {
        $allData = $request->all();

        $getIdLastStudentRegistered = RegisterStudentController::register($allData);
        if (!(is_numeric($getIdLastStudentRegistered))) {
            $message = "Nome e endereço de e-mail já cadastrado no sistema";
            return redirect()->back()->with('alertDontOK', $message);
        }

        $resultAddress = RegisterStudentAddressController::register($allData, $getIdLastStudentRegistered);
        $resultRecomendation = RecomendationController::registerRecomendation($allData);

        if ($resultAddress && $resultRecomendation) {
            $message = "Estudante e recomendações registradas com sucesso no sistema";
            return redirect()->back()->with('alertOK', $message);
        } else if ($resultAddress) {
            $message = "Estudante registrado com sucesso no sistema";
            return redirect()->back()->with('alertOK', $message);
        }
    }
}
