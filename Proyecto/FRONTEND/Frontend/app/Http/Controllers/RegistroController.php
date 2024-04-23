<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RegistroController extends Controller
{
    public function formRegistro()
    {
        return view('registro');
    }

    public function registrarUsuario(Request $request)
    {
        $client = new Client([
            'base_uri' => 'http://localhost:8094/api/', // Reemplaza con la URL de tu backend Spring Boot
        ]);

        try {
            $response = $client->post('cliente/crear', [
                'json' => [
                    'nombre' => $request->input('nombre'),
                    'apellido' => $request->input('apellido'),
                    'identidad' => $request->input('identidad'),
                    'correo' => $request->input('correo'),
                    'contrasenia' => $request->input('contrasenia'),
                ]
            ]);

            // Verificar si el registro fue exitoso (puedes ajustar esta condición según la respuesta de tu backend)
            if ($response->getStatusCode() == 200) {
                // Almacena un mensaje de éxito en la sesión
                return redirect()->route('landing')->with('success', '¡Usuario registrado exitosamente!');
            }

            // Si el registro no fue exitoso, redirige de vuelta con un mensaje de error
            return redirect()->back()->with('error', 'Ocurrió un error durante el registro.');

        } catch (\Exception $e) {
            // Manejar cualquier error que ocurra durante la solicitud
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
