<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
//$routes->get('/pelicula', 'Pelicula::index');
$routes->group('dashboard',function($routes){
    $routes->presenter('pelicula',['controller'=> 'Dashboard\Pelicula']);
    $routes->presenter('categoria',['except'=>'show','controller'=> 'Dashboard\Categoria']);
});



