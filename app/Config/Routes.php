<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/',                                   'Home::index');


$routes->get('users',                               'Users::index',             ['filter' => 'CheckReadPermission', 'filter' => 'CheckIsAdmin']);
$routes->get('users/listar_usuarios',               'Users::listar_usuarios',   ['filter' => 'CheckReadPermission']);
$routes->get('users/(:num)/edit',                   'Users::edit/$1',           ['filter' => 'CheckEditPermission']);
$routes->put('users/(:num)',                        'Users::update/$1',         ['filter' => 'CheckUpdatePermission']);


$routes->get('solicitudes',                             'Solicitudes::index',                           ['filter' => 'CheckReadPermission']);
$routes->get('solicitudes/listar_solicitudes',          'Solicitudes::listar_solicitudes',              ['filter' => 'CheckReadPermission']);
$routes->get('solicitudes/(:num)/edit',                 'Solicitudes::edit/$1',                         ['filter' => 'CheckEditPermission']);
$routes->put('solicitudes/(:num)',                      'Solicitudes::update/$1',                       ['filter' => 'CheckUpdatePermission']);
$routes->put('solicitudes/(:num)/img',                  'Solicitudes::update_img/$1',                   ['filter' => 'CheckUpdatePermission']);
$routes->post('solicitudes/crear',                      'Solicitudes::create');
$routes->put('solicitudes/(:num)/fecha_nacimiento',     'Solicitudes::update_fecha_nacimiento/$1',      ['filter' => 'CheckUpdatePermission']);
$routes->get('solicitudes/(:num)/afiliar',              'Solicitudes::create_afiliado/$1',              ['filter' => 'CheckCreatePermission']);



$routes->get('afiliados',                               'Afiliados::index',                           ['filter' => 'CheckReadPermission']);
$routes->get('afiliados/listar_afiliados',              'Afiliados::listar_afiliados',                ['filter' => 'CheckReadPermission']);
$routes->get('afiliados/(:num)/edit',                   'Afiliados::edit/$1',                         ['filter' => 'CheckEditPermission']);
$routes->put('afiliados/(:num)',                        'Afiliados::update/$1',                       ['filter' => 'CheckUpdatePermission']);
$routes->put('afiliados/(:num)/fecha_nacimiento',       'Afiliados::update_fecha_nacimiento/$1',      ['filter' => 'CheckUpdatePermission']);




$routes->get('estados/',                            'Estados::index',                   ['filter' => 'CheckReadPermission']);
$routes->get('estados/listar_estados',              'Estados::listar_estados',          ['filter' => 'CheckReadPermission']);
$routes->get('estados/new',                         'Estados::new');
$routes->post('estados/',                           'Estados::create');
$routes->get('estados/(:num)/edit',                 'Estados::edit/$1',                 ['filter' => 'CheckEditPermission']);
$routes->put('estados/(:num)',                      'Estados::update/$1',               ['filter' => 'CheckUpdatePermission']);


$routes->get('municipios/',                            'Municipios::index',                   ['filter' => 'CheckReadPermission']);
$routes->get('municipios/listar_municipios',           'Municipios::listar_municipios',       ['filter' => 'CheckReadPermission']);
$routes->get('municipios/new',                         'Municipios::new');
$routes->post('municipios/',                           'Municipios::create');
$routes->get('municipios/(:num)/edit',                 'Municipios::edit/$1',                 ['filter' => 'CheckEditPermission']);
$routes->put('municipios/(:num)',                      'Municipios::update/$1',               ['filter' => 'CheckUpdatePermission']);


$routes->get('departamentos/',                            'Departamentos::index',                       ['filter' => 'CheckReadPermission']);
$routes->get('departamentos/listar_departamentos',        'Departamentos::listar_departamentos',        ['filter' => 'CheckReadPermission']);
$routes->get('departamentos/new',                         'Departamentos::new');
$routes->post('departamentos/',                           'Departamentos::create');
$routes->get('departamentos/(:num)/edit',                 'Departamentos::edit/$1',                     ['filter' => 'CheckEditPermission']);
$routes->put('departamentos/(:num)',                      'Departamentos::update/$1',                   ['filter' => 'CheckUpdatePermission']);


service('auth')->routes($routes);
