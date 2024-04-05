<h1> Prodecimiento EXAMEN I </h1>


<h2> Crear proyecto en Laravel</h2>
<p>
    Se utilizara el comando: <br>

        laravel new Nombre_Proyecto
</p>

<h2> Generar una base de datos </h2>
    <p>
    La base de datos se genera automaticamente
    despues de crear el proyecto de laravel. Ahora para cambiar las variables de entorno de esta desde cambiar, agregar informacion del usuario nos dirigiremos a las variables de entorno (.env).
    </p>

<h2>Generar migraciones bases</h2>
<p>
    Para generar las miagraciones bases en el proyecto utilizaremos las siguiente linea de comando que nos genera las clases donde se trabajaran las tablas en los modelos del proyecto. <br>
        
        php artisan make:migration nombre_tabla.
</p>

<h2>Generar atributos para las tablas</h2>
<p>
    Luego comenzaremos a crear las tablas seguiremos los siguientes pasos: 
    Abrir el archivo de migración recién creado en un editor de texto. En el método up() de la clase de migración, puedes definir la estructura de la tabla utilizando los métodos proporcionados por el objeto "Schema". Entonces tendra la siguiente estructura: <br>

    public function up() {
    Schema::table('nombre_de_la_tabla', function (Blueprint $table) {
        $table->string('nueva_columna');
    });
    }

</p>

<h2> MODELS </h2>
<p>
Los modelos representan la capa de acceso a datos de la aplicación.

Los modelos son responsables de interactuar con la base de datos, realizar consultas, insertar, actualizar y eliminar registros, y aplicar lógica de negocio relacionada con los datos.

Cada modelo generalmente representa una tabla en la base de datos y proporciona métodos para realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) en esa tabla.

Los modelos pueden contener relaciones entre diferentes tablas de la base de datos, lo que permite acceder a datos relacionados de manera fácil y eficiente.
</p>

<h3>Generar Modelo</h3>
<p>
    Para generar un modelo utilizaremos la siguiente linea de comando: <br>

        php artisan make:model nombre_model
</p>

<h2> CONTROLLERS </h2>
<p>
Los controladores representan la capa de lógica de aplicación de la aplicación.

Los controladores son responsables de manejar las solicitudes HTTP entrantes, procesar la entrada del usuario, interactuar con los modelos para obtener o modificar datos y devolver una respuesta adecuada al usuario.

Los controladores contienen métodos (acciones) que representan diferentes puntos de entrada a la aplicación. Cada acción generalmente corresponde a una ruta en la aplicación y se encarga de manejar una solicitud específica.

Los controladores pueden llamar a las vistas para generar la respuesta que se enviará al navegador del usuario.
</p>

<h3>Generar Controlador</h3>
<p>
    Para generar un controlador utilizaremos la siguiente linea de comando: <br>

        php artisan make:controller nombre_controlador
</p>

<h2> VIEWS </h2>
<p>
Las vistas representan la capa de presentación de la aplicación.

Las vistas son archivos que contienen HTML, CSS, JavaScript y código PHP (o Blade en el caso de Laravel) que define la estructura y el aspecto de la interfaz de usuario.

Las vistas reciben datos del controlador y los utilizan para generar el contenido dinámico que se mostrará al usuario.

Las vistas pueden incluir lógica simple para iterar sobre datos, mostrar formularios, incluir fragmentos de código reutilizables y más.
</p>

<h2> RUTAS </h2>
<p>
Las rutas en un proyecto son responsables de definir cómo se debe responder a las solicitudes HTTP entrantes. En un framework web como Laravel, las rutas actúan como un puente entre las solicitudes del navegador y la lógica de la aplicación.

<h3> FUNCIONES  DE LAS RUTAS </h3>

Definir puntos de entrada a la aplicación: Las rutas especifican los URI (Uniform Resource Identifier) que los usuarios pueden solicitar en su aplicación y los controladores y métodos que deben manejar esas solicitudes. 

Mapear solicitudes a acciones: Cuando un usuario solicita una URL específica, el enrutador de Laravel busca la ruta correspondiente y llama al controlador y método asociados para manejar esa solicitud.

Proporcionar una API clara: Las rutas actúan como una API pública para su aplicación, definiendo explícitamente cómo interactuar con diferentes partes de la aplicación.

<h3> RELACIONES CON LAS VIEWS </h3>

Renderizar vistas desde los controladores: Los controladores pueden llamar a las vistas utilizando el método view() de Laravel. Este método acepta el nombre de la vista (o la ruta a la vista) y opcionalmente datos que se pasarán a la vista.

Pasando datos a las vistas: Los controladores pueden pasar datos a las vistas utilizando la función view() de Laravel. Estos datos se pueden acceder en la vista y se utilizan para generar el contenido dinámico que se mostrará al usuario.

<h4> EJEMPLO </h4>
    
    // routes/web.php
    Route::get('/', 'HomeController@index')->name('home');

- Route::get('/') define una ruta GET para la raíz de la aplicación.

- 'HomeController@index' especifica que la acción index del controlador HomeController manejará esta ruta.

- ->name('home') asigna un nombre a la ruta, lo que te permite referenciarla de manera más fácil en otras partes del código.

Luego, en el controlador HomeController, podrías tener un método index() que se encarga de cargar la vista correspondiente:

    // app/Http/Controllers/HomeController.php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class HomeController extends Controller
    {
        public function index()
        {
            return view('home'); // Renderiza la vista 'home.blade.php'
        }
    }

Aquí, return view('home') indica que Laravel debe renderizar la vista home.blade.php cuando se accede a la ruta definida en la ruta '/.

</p>