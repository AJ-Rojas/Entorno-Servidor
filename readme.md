<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<style></style>

## Proyecto Laravel

Proyecto en el cual se ha desarrollado una aplicación web en PHP que se ejecuta contra una base de datos en MySql. Dicha aplicación gestiona un CRUD basado en REST en el cual lo gestionaremos mediante:

    CRUD de entidades
    Front Controller
    Rutas
    REST
    Controladores
    Modelo
    Vistas
    Usuarios
    Validador
    Sesiones
    Variables de entorno

Dicho desarrollo se ha realizado basandose en la infraestructura de laravel. Para la utilización de código de terceros he usado el gestor de dependencias Composer.

## Pasos para la instalación

Para poder instalar este proyecto clonaremos este repositorio, el cual contiene la gestión del CRUD. Una vez lo tengamos clonado en nuestro entorno de desarrollo seguiremos los siguientes pasos:

   - 1.- Desde la consola nos moveremos al directorio raiz del proyecto que en este caso es ProyectoLaravel.

   - 2.- Una vez estemos en el directorio raiz instalaremos el gestor de dependencias Composer, y para ello ejecutamos el siguiente comando:

        **composer install**

   - 3.- Cuando haya terminado la instalación de Composer lo siguiente que haremos es copiar el contenido de .env.example, y para ello ejecutamos el siguiente      comando:

        **cp .env.example .env**

    Con este comando lo que estamos haciendo es renombrar el archivo .env.example

   - 4.- Abrimos el archivo que hemos modificado y lo que tenemos que cambiar es DB_DATABASE en la cual le indicaremos el nombre de la base de datos que hayamos creado previamente. También modificaremos las siguientes líneas DB_USERNAME y DB_PASSWORD que son las que contienen nuestro usuario y contraseña de la base de datos.

   - 5.- Una vez hecho los cambios lo siguiente que haremos es generar una KEY y para ello ejecutamos el siguiente comando:

        **php artisan key:generate**

   - 6.- Una vez creada la KEY lo siguiente en generar es un JWT y para ello ejecutamos el siguiente comando:

        **php artisan jwt:generate**
    
   - 7.- Los siguiente que haremos es usar las migraciones y los seeders y para ello ejecutamos el siguiente comando:

        **php artisan migrate --seed**
    
   - 8.- Una vez ejecutadas las migraciones y los seeders, para finalizar iniciamos el servidor y para ello ejecutamos el siguiente comando:

        **php artisan serve**

Una vez realizados estos pasos aya tendremos la aplicación lista para usar, y para acceder a ella iniciamos Apache y MySql para poder tener acceso a nuestra base de datos y podamos ejecutarlo en un entorno sin necesidad de salir a internet. Cuando tengamos iniciados nuestros servicios abriremos nuestro navegador y en la barra de búsquedas tecleamos la dirección que nos ha dado el comando **php artisan serve**. Por defecto genera **http://127.0.0.1:8000** pero también podemos acceder desde **http://localhost:8000**.