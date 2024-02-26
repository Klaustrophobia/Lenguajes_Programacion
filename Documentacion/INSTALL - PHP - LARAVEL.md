## INSTALACION
    Previa instalacion de los siguientes software:
        a. WampServer
        b. Composer

    1. Instalar Laravel con el siguiente comando:
        composer global require laravel/installer
    
    2. Creacion de un nuevo proyecto con el siguiente comando:
        laravel new Nombre_Proyecto

## CREAR UN PROYECTO EN CARPETA EXTERNA A WAMP/64
    1.  Abre una terminal o línea de comandos y navega hasta el directorio donde deseas crear tu proyecto de
    Laravel. Ejecuta el siguiente comando para crear un nuevo proyecto de Laravel:
        composer create-project --prefer-dist laravel/laravel nombre-del-proyecto
    
    2. Configurar la base de datos en Laravel: Abre el archivo .env en el directorio raíz de tu proyecto de Laravel y configura la conexión a la base de datos de MySQL proporcionada por WampServer. Asegúrate de que los campos DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME y DB_PASSWORD estén configurados correctamente.

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=nombre_basededatos
        DB_USERNAME=usuario
        DB_PASSWORD=contraseña

    3. Copiar el proyecto de Laravel a la carpeta de WampServer: Copia todo el proyecto de Laravel que acabas de crear a la carpeta de proyectos de WampServer. Por lo general, esta carpeta está ubicada en C:\wamp64\www en sistemas Windows.

    4. Iniciar WampServer: Abre WampServer desde su icono en la bandeja del sistema y asegúrate de que el servicio Apache y MySQL estén activos.

    5. Acceder al proyecto de Laravel desde el navegador: Abre tu navegador web y navega a http://localhost/nombre-del-proyecto/public, donde nombre-del-proyecto es el nombre de la carpeta de tu proyecto de Laravel en la carpeta www de WampServer.

        Por ejemplo, si el nombre de tu proyecto es mi-proyecto, la URL sería http://localhost/mi-proyecto/public.


