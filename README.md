<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Curso de Introducción a Laravel

## DESARROLLO EN LARAVEL
1- Se deben de crear las rutas
2- Configuracion de controladores
3- Codificacion de la logica
_____________________________________________

## COMO CREAR UN PROYECTO EN LARAVEL
 Despues de instalar el composer y el xammp o tro gestor de bases de datos se corre el siguiente codigo:
    laravel new nombre del proyecto
o tambien se puede usar
    composer create-project --prefer-dist laravel/laravel nombre del proyecto
_____________________________________________

## RECONSTRUIR LARAVEL
En caso de perder archivos raiz se puede usar el siguiente codigo para reconstruir las carpetas
    composer install
_____________________________________________

## MIGRACIONES
Con el siguiente comando se migran las tablas creadas en laravel hacia la base de datos
    php artisan migrate
_____________________________________________
## RUTAS
Para ver las rutas existentes se usa el siguiente codigo
    php artisan routes:list

Métodos http en servidor:
    Get: para mostrar o listar.
    Post: para crear
    Put/Patch: para modificar o editar
    Delete: eliminar o borrar
Sytax de una ruta
    Route::METODO HTTP('NOMBRE DE LA RUTA', 'App\Http\Controllers\NOMBRE DEL CONTROLADOR@METODO DEL CONTROLADOR')->name('NOMBRE ASIGNADO A LA RUTA.METODO DEL CONTROLADOR');
_____________________________________________

## CRUD LARAVEL
Para crear un controlador sin ningun metodo se usa el siguiente codigo
    php artisan make:controller nombre del controlador

Si se quiere crear un controlador con todos los metodos de un CRUD se usa el siguiente codigo
    php artisan make:controller -r nombre del controlador
Notas:
- los controladores deben de seguir la logica de las rutas
_____________________________________________

## MODELOS LARAVEL
El siguiente codigo crea archivo controlador, modelo y migracion con un solo comando.
    php artisan make:model ModelName -crm
    
Te crea -r: resource, -m: migración, -c: controlador, te ahorra un poco de código y además hace que tu proyecto esté un poco mas ordenado
    php artisan make:model [NombreModelo] -r -m -c
_____________________________________________

## tinker
Crea la cantidad de usuarios que una quiera
    User::factory()->count(12)->create();
_____________________________________________

## Middlewares
La función principal es proporcionar una fácil y conveniente capa para filtrar las solicitudes HTTP. 

hay dos formas de usar los middlewares Y SOLO SE DEBE DE UTILIZAR UNA DE ELLAS, preferiblemente en las rutas.

- la primera es poner los middlewares en los controladores
    public function __construct(){
	$this->middleware('auth')->only(['index','store',example]);
    }
- la segunda es poniendo los middlewares en las rutas
    Route::get('/', 'App\Http\Controllers\UserController@index')->middleware('auth');
