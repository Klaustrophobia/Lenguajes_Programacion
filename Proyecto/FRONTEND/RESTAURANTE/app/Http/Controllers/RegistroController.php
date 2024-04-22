<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RegistroController extends Controller
{
    public function formularioRegistro()
    {
        return view('registro');
    }

    public function registrarUsuario(Request $request)
    {
        $client = new Client();
        $response = $client->post('http://localhost:8093/api/crear/cliente', [
            'json' => $request->all()
        ]);

        return $response->getBody();
    }
}
