<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class BasicTwoController extends Controller
{
    public function index()
    {
        return view('basic_two', ["students" => Student::all()]);
    }

    public function teste(){
        return view('basic_two', ["students" => Student::all()]);
    }

    public function getResults(Request $request)
    {
        $data = $request->all();
        $formatedData = array();
        $result = 0;


        unset($data["_token"]);
        foreach ($data as $key => $value) {
            $formatedData[$key] = strtoupper($data[$key]);
        }

        if ($formatedData["question11"] == "ECUADORIAN") {
            $result++;
            $formatedData["question11"] .= " CORRETO";
        }

        if ($formatedData["question12"] == "VIETNAM") {
            $result++;
            $formatedData["question12"] .= " CORRETO";
        }

        if ($formatedData["question13"] == "ITALIAN") {
            $result++;
            $formatedData["question13"] .= " CORRETO";
        }
        if ($formatedData["question14"] == "EGYPT") {
            $result++;
            $formatedData["question14"] .= " CORRETO";
        }

        if ($formatedData["question15"] == "DO") {
            $result++;
            $formatedData["question15"] .= " CORRETO";
        }
        if ($formatedData["question21"] == "IS THIS") {
            $result++;
            $formatedData["question21"] .= " CORRETO";
        }

        if ($formatedData["question22"] == "ARE THOSE") {
            $result++;
            $formatedData["question22"] .= " CORRETO";
        }
        if ($formatedData["question23"] == "ARE THESE") {
            $result++;
            $formatedData["question23"] .= " CORRETO";
        }
        if ($formatedData["question24"] == "IS THAT") {
            $result++;
            $formatedData["question24"] .= " CORRETO";
        }

        if ($formatedData["question31"] == "WENT") {
            $result++;
            $formatedData["question31"] .= " CORRETO";
        }
        if ($formatedData["question32"] == "WANTED") {
            $result++;
            $formatedData["question32"] .= " CORRETO";
        }
        if ($formatedData["question33"] == "RAINED") {
            $result++;
            $formatedData["question33"] .= " CORRETO";
        }
        if ($formatedData["question34"] == "CHANGED") {
            $result++;
            $formatedData["question34"] .= " CORRETO";
        }
        if ($formatedData["question35"] == "ATE") {
            $result++;
            $formatedData["question35"] .= " CORRETO";
        }
        if ($formatedData["question36"] == "STUDIED") {
            $result++;
            $formatedData["question36"] .= " CORRETO";
        }
        if ($formatedData["question37"] == "WAS") {
            $result++;
            $formatedData["question37"] .= " CORRETO";
        }
        if ($formatedData["question38"] == "SLEPT") {
            $result++;
            $formatedData["question38"] .= " CORRETO";
        }

        if ($formatedData["question41"] == "WASN'T") {
            $result++;
            $formatedData["question41"] .= " CORRETO";
        }
        if ($formatedData["question42"] == "WAS") {
            $result++;
            $formatedData["question42"] .= " CORRETO";
        }
        if ($formatedData["question43"] == "WERE") {
            $result++;
            $formatedData["question43"] .= " CORRETO";
        }
        if ($formatedData["question44"] == "WAS") {
            $result++;
            $formatedData["question44"] .= " CORRETO";
        }
        if ($formatedData["question45"] == "WEREN'T") {
            $result++;
            $formatedData["question45"] .= " CORRETO";
        }
        if ($formatedData["question46"] == "WAS") {
            $result++;
            $formatedData["question46"] .= " CORRETO";
        }

        if ($formatedData["question51"] == "WENT") {
            $result++;
            $formatedData["question51"] .= " CORRETO";
        }
        if ($formatedData["question52"] == "GOT") {
            $result++;
            $formatedData["question52"] .= " CORRETO";
        }
        if ($formatedData["question53"] == "WENT") {
            $result++;
            $formatedData["question53"] .= " CORRETO";
        }
        if ($formatedData["question54"] == "GOT") {
            $result++;
            $formatedData["question54"] .= " CORRETO";
        }


        if ($formatedData["question61"] == "WHERE DID YOU GO?") {
            $result++;
            $formatedData["question61"] .= " CORRETO";
        }
        if ($formatedData["question62"] == "WHO DID YOU GO WITH?") {
            $result++;
            $formatedData["question62"] .= " CORRETO";
        }
        if ($formatedData["question63"] == "WHAT WAS THE WEATHER LIKE?") {
            $result++;
            $formatedData["question63"] .= " CORRETO";
        }
        if ($formatedData["question64"] == "HOW LONG WERE YOU THERE?") {
            $result++;
            $formatedData["question64"] .= " CORRETO";
        }

        if ($formatedData["question71"] == "MUCH") {
            $result++;
            $formatedData["question71"] .= " CORRETO";
        }
        if ($formatedData["question72"] == "A BANANA") {
            $result++;
            $formatedData["question72"] .= " CORRETO";
        }
        if ($formatedData["question73"] == "MANY") {
            $result++;
            $formatedData["question73"] .= " CORRETO";
        }
        if ($formatedData["question74"] == "BEEF") {
            $result++;
            $formatedData["question74"] .= " CORRETO";
        }
        if ($formatedData["question75"] == "MANY") {
            $result++;
            $formatedData["question75"] .= " CORRETO";
        }
        if ($formatedData["question76"] == "EGGS") {
            $result++;
            $formatedData["question76"] .= " CORRETO";
        }

        if ($formatedData["question81"] == "ANY") {
            $result++;
            $formatedData["question81"] .= " CORRETO";
        }
        if ($formatedData["question82"] == "SOME") {
            $result++;
            $formatedData["question82"] .= " CORRETO";
        }
        if ($formatedData["question83"] == "SOME") {
            $result++;
            $formatedData["question83"] .= " CORRETO";
        }
        if ($formatedData["question84"] == "ANY") {
            $result++;
            $formatedData["question84"] .= " CORRETO";
        }

    }
}
