<h1> DOCUMENTACION </h1>

Para empezar vamos a crear una ruta que sera el controlador para los apartamentos.
Utilizaremos el siguiente comando:
    php artisan make:controller ApartamentoController

Luego agregar la logica del controlador y su metodos:
    public function calcularPrecio($piso = 1, $area)
    {
        $valorBase = 1500;
        $aumentoPorPiso = 0.1;
        $precio = $valorBase + ($valorBase * $aumentoPorPiso * ($piso - 1));
        $precioTotal = $precio * $area;

        return view('apartamento.precio', compact('precioTotal'));
    }

Luego crear una vista en la carpeta views [HTML]

En web.php, agregar la ruta:

    use App\Http\Controllers\ApartamentoController;

    Route::get('/calcular-precio/{piso?}/{area}', [ApartamentoController::class, 'calcularPrecio']);

Crear la base de datos en MySQL llamada apartamentos

Crear migraciones para las tablas duenios y propiedades
    php artisan make:migration create_duenios_table
    php artisan make:migration create_propiedades_table
En las migraciones generadas, definir las estructuras de las tablas y ejecutar php artisan migrate.

Insertar registros en las tablas duenios y propiedades

Modificar estructura de la tabla propiedades y agregar el campo estado
    php artisan make:migration add_estado_to_propiedades_table
En la migración generada, agregar el campo estado a la tabla propiedades y ejecutar php artisan migrate.

Modificar estructura de la tabla duenios y eliminar el campo telefono
    php artisan make:migration remove_telefono_from_duenios_table
En la migración generada, eliminar el campo telefono de la tabla duenios y ejecutar php artisan migrate.

Crear modelos para las tablas duenios y propiedades
    php artisan make:model Duenio
    php artisan make:model Propiedad

Crear vistas que muestren todas las propiedades y todos los dueños
    php artisan make:controller PropiedadController
    php artisan make:controller DuenioController
En los controladores generados, crear métodos para mostrar todas las propiedades y todos los dueños, y las respectivas vistas.

Crear vista para insertar registros de dueños

Crear vista para mostrar todas las propiedades de un dueño

Crear vista para mostrar toda la información del dueño de una propiedad
Recuerda ejecutar php artisan serve para iniciar el servidor de desarrollo de Laravel y probar las rutas en tu navegador.