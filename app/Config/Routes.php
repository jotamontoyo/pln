<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/',                                   'Home::index');


$routes->get('/users',                              'Users::index',             ['filter' => 'CheckReadPermission']);
$routes->get('/users/listar_usuarios',              'Users::listar_usuarios',   ['filter' => 'CheckReadPermission']);
$routes->get('/users/(:num)/edit',                  'Users::edit/$1',           ['filter' => 'CheckEditPermission']);
$routes->put('/users/(:num)',                       'Users::update/$1',         ['filter' => 'CheckUpdatePermission']);


$routes->get('/solicitudes',                        'Solicitudes::index',               ['filter' => 'CheckReadPermission']);
$routes->get('/solicitudes/listar_solicitudes',     'Solicitudes::listar_solicitudes',  ['filter' => 'CheckReadPermission']);
$routes->get('/solicitudes/(:num)/edit',            'Solicitudes::edit/$1',             ['filter' => 'CheckEditPermission']);
$routes->put('/solicitudes/(:num)',                 'Solicitudes::update/$1',           ['filter' => 'CheckUpdatePermission']);
$routes->put('/solicitudes/(:num)/img',             'Solicitudes::update_img/$1',       ['filter' => 'CheckUpdatePermission']);
$routes->post('/solicitudes/crear',                 'Solicitudes::create');


service('auth')->routes($routes);
