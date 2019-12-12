<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function enter(Request $request)
    {
        $data = $request->all();
        if ($data['password'] === 'senha') {
            $this->acessAllowed();
        } else {
            $this->acessDenied('acesso negado, senha incorreta');
        }
    }

    private function acessAllowed()
    {
        $dataOk = 'ok';
        return view('tests', ['dataOk' => $dataOk]);
    }

    private function acessDenied($message)
    {
        return view('tests', ['message' => $message]);
    }

    public function index()
    {
        return view('tests');
    }
}
