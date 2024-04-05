<h1> Springboot Instalacion </h1>
<p>
Primero se realizara la descarga de las extensiones a utilizar para visual code studio que son 
las siguientes:
    
    - Java Developer Kit [JDK]
    - Springboot Initializer Java SUP
    - Springboot dashboard
    - Springboot boot tools
    - Springboot Extension Pack
    - Springboot snippets
    - Java Extension Pack
    - Maven for java
    - Lombok annotations
</p>
<h2>Generar proyecto</h2>
<p>
Para generar un proyecto de springboot vamos a realizar lo siguiente:
    
    1. Ctrl+Shift+P para abrir la paleta de comandos de VSCode y 
    seleccionar Spring Initializer: Maven Project > Ultima Version [No seleccionar versiones SNAPSHOT].
    2. Seleccionar el lenguaje de programacion.
    3. El grupo de trabajo que por objetivos de la clase se
    utilizara el siguiente formato:
        hn.unah.lenguajes1700 
    4. Luego el nombre del proyecto [gusto personal]
</p>

<h2> Dependencias </h2>
<p>
Las dependencias que siempre se van a utilizar son las siguientes:

    - Lombok        -- DEPENDENCIA PRINCIPAL --
    - JPA  [Spring Data]
    - MySQL
    - Spring Web    -- DEPENDENCIA PRINCIPAL --
    - Springboot dev tools  -- DEPENDENCIA PRINCIPAL --

Si quisieramos agregar mas dependencias despues de haber creado el proyecto en springboot 
lo que se podria hacer es ir a pom.xml y luego buscar donde se encuentran los tags de 
<dependency> y agregar la nueva dependencia siguiente el parametro de las anteriores.
</p>

<h2>Ejecucion del proyecto</h2>
<p>
Ir a Ver > Vista > Springboot dashboard; Ahi debe aparecer la
aplicacion para ser ejecutada.

Luego vamos a proceder a crear carpetas para los controladores y los dtos.
</p>

<h3>DTOS</h3>
<p>
El propósito principal de un DTO es encapsular un conjunto de datos relacionados en una sola estructura de datos para ser transferidos entre diferentes capas de una aplicación, como entre la capa de presentación y la capa de acceso a datos. Esto ayuda a reducir la cantidad de llamadas a la base de datos y mejora el rendimiento al minimizar el tráfico de red.

Un DTO generalmente contiene solo datos, es decir, no debería contener lógica de negocio. Por lo tanto, es comúnmente una clase simple que tiene campos (variables) y métodos de acceso (getters y setters) para esos campos.

Los DTOs son útiles en aplicaciones empresariales donde la separación de preocupaciones y la eficiencia de la transferencia de datos son importantes. Por ejemplo, en una aplicación web, un DTO podría ser utilizado para transportar los datos de un formulario HTML a través de HTTP hacia el servidor, donde luego serán procesados y almacenados en una base de datos.
</p>

<h3>DAO</h3>
<p>

</p>

<h3>Construccion de un Controller</h3>
<p>
Se comienza creando una clase java, luego se le agregar el decordador @RequestMapping, el cual 
lo que hace es se utiliza para asignar solicitudes HTTP a métodos específicos en controladores de Spring. Este decorador se utiliza para mapear una URL o un conjunto de URLs a un método particular dentro de un controlador.

Tambien se hara uso del decorador @RestController, se utiliza para construir servicios web RESTful, donde los métodos del controlador generan directamente la respuesta HTTP en forma de datos, como JSON o XML, en lugar de devolver una vista renderizada. Esto hace que sea más conveniente desarrollar servicios web que sigan el estilo arquitectónico REST.

RECORDATORIO URL = ENDPOINT
<p>

<h3> CLASE CONCRETA </h3>

