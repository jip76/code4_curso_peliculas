<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
//$routes->get('/pelicula', 'Pelicula::index');
$routes->group('dashboard',function($routes){
    $routes->presenter('pelicula',['controller'=> 'Dashboard\Pelicula']);
    //$routes->get('usuario/crear','\App\Controllers\Web\Usuario::crear_usuario');
    //$routes->get('usuario/probar/contrasena','\App\Controllers\Web\Usuario::probar_contrasena');
    //$routes->get('categorias','\App\Controllers\Dashboard\Categoria::index');

    $routes->presenter('categoria',['except'=>'show','controller'=> 'Dashboard\Categoria']);
    
});
$routes->get('login','\App\Controllers\Web\Usuario::login',[ ' as ' => 'usuario.login']);
$routes->post('login_post','\App\Controllers\Web\Usuario::login_post', [' as ' => 'usuario.login_post']);

$routes->get('registrar','\App\Controllers\Web\Usuario::registrar',[ ' as ' => 'usuario.registrar']);
$routes->post('registrar_post','\App\Controllers\Web\Usuario::registrar_post', [' as ' => 'usuario.registrar_post']);
$routes->get('logout','\App\Controllers\Web\Usuario::logout',[ ' as ' => 'usuario.logout']);


