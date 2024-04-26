<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;


class RegistroController extends Controller
{
    public function formRegistro()
    {
        return view('registro');
    }

    public function registrarUsuario(Request $request)
    {
        $client = new Client(['base_uri' => 'http://localhost:8094/api/']);

        try {
            $response = $client->post('cliente/crear', [
                'json' => $request->all(),
            ]);

            // Muestra el mensaje emergente y redirige a la vista de inicio de sesión
            return redirect()->route('login')->with('success', 'Usuario registrado exitosamente.');
        } catch (\Exception $e) {
            // Si hay un error, redirige de nuevo al formulario de registro con un mensaje de error
            return redirect()->back()->with('error', 'Error al registrar usuario: ' . $e->getMessage())->withInput();
        }
    }
}





