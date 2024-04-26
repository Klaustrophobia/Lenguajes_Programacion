<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LoginController extends Controller
{
    public function formLogin()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        // Depurar los datos recibidos
        //dd($request->all());

        // Validar los datos del formulario
        $request->validate([
            'correo' => 'required|email',
            'contrasenia' => 'required',
        ]);

        // Obtener los datos del formulario
        $correo = $request->input('correo');
        $contrasenia = $request->input('contrasenia');

        // Crear una instancia del cliente Guzzle
        $client = new Client();

        try {
            // Realizar la solicitud HTTP al backend de Spring Boot
            $response = $client->post('http://localhost:8094/api/cliente/login', [
                'json' => [
                    'correo' => $correo,
                    'contrasenia' => $contrasenia,
                ],
            ]);

            // Verificar si la respuesta fue exitosa (código de estado 2xx)
            if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
                // Autenticación exitosa, redirigir al usuario a la vista del menú
                return redirect()->route('menu');
            } else {
                // Error de autenticación
                return response()->json(['error' => 'Correo o contraseña incorrectos'], $response->getStatusCode());
            }
        } catch (\Exception $e) {
            // Error al realizar la solicitud HTTP
            return response()->json(['error' => 'Error en la comunicación con el servidor'], 500);
        }
    }

}

