<?php

namespace App\Http\Controllers;

use App\Recomendation;

class RecomendationController extends Controller
{
    public function index()
    {

    }

    public static function registerRecomendation($data)
    {
        $insert = false;

        if ($data['1name'] !== null && $data['1tell'] !== null) {
            if (Recomendation::create([
                "name" => $data['1name'],
                "phone" => $data['1tell']
            ])) {
                $insert = true;
            }
        }

        if ($data['2name'] !== null && $data['2tell'] !== null) {
            if (Recomendation::create([
                "name" => $data['2name'],
                "phone" => $data['2tell']
            ])) {
                $insert = true;
            }
        }

        return $insert;
    }
}
