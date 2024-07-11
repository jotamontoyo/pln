<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/',                           'Home::index');
$routes->get('/users',                      'Users::index');
$routes->get('/users/listar_usuarios',      'Users::listar_usuarios');
$routes->get('/users/(:num)/edit',               'Users::edit/$1');


service('auth')->routes($routes);
