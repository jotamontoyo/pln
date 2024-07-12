<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/',                               'Home::index');

$routes->get('/users',                              'Users::index', ['filter' => 'CheckReadPermission']);
$routes->get('/users/listar_usuarios',              'Users::listar_usuarios', ['filter' => 'CheckReadPermission']);
$routes->get('/users/(:num)/edit',                  'Users::edit/$1', ['filter' => 'CheckEditPermission']);


$routes->get('/solicitudes',                        'Solicitudes::index', ['filter' => 'CheckReadPermission']);
$routes->get('/solicitudes/listar_solicitudes',     'Solicitudes::listar_solicitudes', ['filter' => 'CheckReadPermission']);
$routes->get('/solicitudes/(:num)/edit',            'Solicitudes::edit/$1', ['filter' => 'CheckEditPermission']);
$routes->post('/solicitudes/crear',                 'Solicitudes::create');


service('auth')->routes($routes);
