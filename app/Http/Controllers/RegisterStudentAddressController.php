<?php

namespace App\Http\Controllers;

use App\Address;


class RegisterStudentAddressController extends Controller
{
    public static function register($data, $studentId)
    {
        if (Address::create([
            "student_id" => $studentId,
            "address" => $data['address'],
            "zip_code" => $data['cep'],
            "neighborhood" => $data['neighborhood'],
            "houses_number" => $data['number']
        ])) {
            return true;
        }

        return false;
    }
}
