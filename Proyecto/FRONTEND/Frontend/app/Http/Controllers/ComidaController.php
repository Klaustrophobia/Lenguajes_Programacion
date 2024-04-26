<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ComidaController extends Controller
{
    public function crearComida(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
        ]);

        // Obtener los datos del formulario
        $nombre = $request->input('nombre');
        $descripcion = $request->input('descripcion');
        $precio = $request->input('precio');

        // Crear una instancia del cliente Guzzle
        $client = new Client();

        try {
            // Realizar la solicitud HTTP al backend de Spring Boot
            $response = $client->post('http://localhost:8094/api/comida/crear', [
                'json' => [
                    'nombre' => $nombre,
                    'descripcion' => $descripcion,
                    'precio' => $precio,
                ],
            ]);

            // Verificar si la respuesta fue exitosa (código de estado 2xx)
            if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
                // Comida creada exitosamente
                // Puedes redirigir a una página de éxito o mostrar un mensaje
                return redirect()->back()->with('success', 'Comida creada exitosamente');
            } else {
                // Error al crear la comida
                return redirect()->back()->with('error', 'Error al crear la comida');
            }
        } catch (\Exception $e) {
            // Error al realizar la solicitud HTTP
            return redirect()->back()->with('error', 'Error en la comunicación con el servidor');
        }
    }

    public function mostrarComida()
    {
        try {
            // Crear una instancia del cliente Guzzle
            $client = new Client();

            // Realizar la solicitud HTTP al backend de Spring Boot
            $response = $client->get('http://localhost:8094/api/comida/mostrar');

            // Verificar si la respuesta fue exitosa (código de estado 2xx)
            if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
                // Obtener el cuerpo de la respuesta como un array
                $comidas = json_decode($response->getBody(), true);
                // Devolver las comidas
                return $comidas;
            } else {
                // Error en la solicitud HTTP
                return response()->json(['error' => 'Error al obtener las comidas'], $response->getStatusCode());
            }
        } catch (RequestException $e) {
            // Error al realizar la solicitud HTTP
            return response()->json(['error' => 'Error en la comunicación con el servidor'], 500);
        }
    }

    public function agregarIngredientes(Request $request, $idcomida)
    {
        try {
            // Crear una instancia del cliente Guzzle
            $client = new Client();

            // Realizar la solicitud HTTP al backend de Spring Boot
            $response = $client->put("http://localhost:8094/api/comida/{$idcomida}/producto", [
                'json' => [
                    'productos' => $request->productos,
                ],
            ]);

            // Verificar si la respuesta fue exitosa (código de estado 2xx)
            if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
                // Obtener el cuerpo de la respuesta como un array
                $comida = json_decode($response->getBody(), true);
                // Devolver la comida
                return $comida;
            } else {
                // Error en la solicitud HTTP
                return response()->json(['error' => 'Error al agregar ingredientes a la comida'], $response->getStatusCode());
            }
        } catch (RequestException $e) {
            // Error al realizar la solicitud HTTP
            return response()->json(['error' => 'Error en la comunicación con el servidor'], 500);
        }
    }

    public function eliminarComida(Request $request)
    {
        try {
            // Crear una instancia del cliente Guzzle
            $client = new Client();

            // Realizar la solicitud HTTP al backend de Spring Boot
            $response = $client->delete('http://localhost:8094/api/comida/eliminar', [
                'json' => [
                    'idcomida' => $request->idcomida,
                ],
            ]);

            // Verificar si la respuesta fue exitosa (código de estado 2xx)
            if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
                // Obtener el cuerpo de la respuesta como un array
                $comida = json_decode($response->getBody(), true);
                // Devolver la comida
                return $comida;
            } else {
                // Error en la solicitud HTTP
                return response()->json(['error' => 'Error al eliminar la comida'], $response->getStatusCode());
            }
        } catch (RequestException $e) {
            // Error al realizar la solicitud HTTP
            return response()->json(['error' => 'Error en la comunicación con el servidor'], 500);
        }
    }
}
