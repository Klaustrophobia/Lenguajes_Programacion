# DOCUMENTACION FRONTEND
## HERRAMIENTAS A UTILIZAR
    1.PHP; FRAMEWORK LARAVEL
    2.COMPOSER
    3.GUZZLE

## PANTALLAS CLIENTES
    -LANDING PAGE {INGRESAR COMO ADMNISTRADOR O CLIENTE}
    -MENU {PLATILLOS QUE SE DISPONEN}
    -PAGO DE FACTURA

## PANTALLAS DE ADMINSTRADOR
    -

## DOCUMENTACION GUZZLE

    Guzzle es una librería de cliente HTTP para PHP que simplifica la realización de solicitudes HTTP y el manejo de respuestas. Permite a los desarrolladores enviar solicitudes HTTP de manera fácil y elegante, y manejar las respuestas de manera eficiente.

    Algunas de las características principales de Guzzle incluyen:

    1- Sencillez de uso: Guzzle proporciona una interfaz intuitiva y fácil de usar para realizar solicitudes HTTP y trabajar con respuestas.

    2- Soporte para múltiples protocolos: Puede manejar solicitudes y respuestas para una variedad de protocolos HTTP, incluyendo HTTP/1.1 y HTTP/2.

    3- Gestión de cookies: Permite el manejo automático de cookies, lo que facilita la gestión de sesiones y autenticación.

    4- Envío de datos de formulario: Facilita el envío de datos de formularios en solicitudes POST y PUT.

    5- Manejo de redirecciones: Automáticamente sigue las redirecciones de las respuestas HTTP.

    6- Autenticación: Proporciona soporte para varios métodos de autenticación, como Basic, Digest y OAuth.

### INSTALACION GUZZLE

    Para la instalacion de guzzle se debe abrir la linea de comando donde se instalo el proyecto de laravel, luego se ejecutara el comando:
        composer require guzzlehttp/guzzle

    Después de instalar Guzzle, puedes comenzar a usarlo en tu proyecto PHP. Para ello, simplemente importa la clase GuzzleHttp\Client en tus archivos PHP donde desees utilizarlo.
        use GuzzleHttp\Client;

### USO DE PETICIONES HTTP
#### GET
    Para realizar una solicitud GET simple, crea una instancia de GuzzleHttp\Client y utiliza el método get():

        $client = new GuzzleHttp\Client();
        $response = $client->get('https://api/CrearCliente');

#### POST
    Para realizar una solicitud POST con datos, puedes usar el método post() y pasar un arreglo asociativo con los datos 
    que se desea enviar:

        $client = new GuzzleHttp\Client();
        $response = $client->post('https://api/Cliente/post', [
        'form_params' => [
            'key' => 'value'
        ]
        ]);

    Para manejar la respuesta de la solicitud, puedes acceder al cuerpo de la respuesta usando el método getBody():
    
        $body = $response->getBody();

    Para convertir el cuerpo de la respuesta a una cadena JSON, puedes usar el método json():

        $data = $response->getBody()->json();

    Asegúrate de manejar cualquier excepción que pueda ocurrir durante la solicitud, como GuzzleHttp\Exception\RequestException:

        use GuzzleHttp\Exception\RequestException;

            try {
                $response = $client->get('https://api/CrearCliente');
                $data = $response->getBody()->json();
            } catch (RequestException $e) {
                echo "Error: " . $e->getMessage();
            }


