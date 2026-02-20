<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Controlador::index');
$routes->get('crea_producto', 'Controlador::crea_producto');
$routes->post('guardar_producto', 'Controlador::guardar_producto');