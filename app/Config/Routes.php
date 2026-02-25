<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Controlador::index');
$routes->get('crea_producto', 'Controlador::crea_producto');
$routes->post('guardar_producto', 'Controlador::guardar_producto');
$routes->get('lista_producto', 'Controlador::lista_producto');
$routes->get('borraid/(:num)', 'Controlador::eliminar_datos/$1');
$routes->get('pasaid/(:num)', 'Controlador::recupera/$1');
$routes->post('nuevoform', 'Controlador::modificar');
//===================================================================
$routes->get('lista', 'Clientes::lista_clientes');
$routes->get('crea_cliente', 'Clientes::crea_cliente');
$routes->post('guardar_cliente', 'Clientes::guardar_cliente');
$routes->get('borrarid/(:num)', 'Clientes::elimina_cliente/$1');
$routes->get('pasoid/(:num)', 'Clientes::recupera_cliente/$1');
$routes->post('edita_cliente', 'Clientes::edita_cliente');
//===================================================================
$routes->get('crea_merma', 'Merma::crea_merma');
$routes->get('guarda_merma', 'Merma::guarda_merma');
$routes->get('lista_merma', 'Merma::lista_merma');
//===================================================================
$routes->get('Crea_entradas', 'Entradas::Crea_entrada');
$routes->post('Guardar_Entrada', 'Entradas::Guardar_Entrada');

//===================================================================
$routes->get('Crea_Unidad', 'U_Medida::Crea_unidad');
$routes->post('Guarda_Unidad', 'U_Medida::Guarda_Unidad');
$routes->get('Mostrar_Unidades', 'U_Medida::Mostrar_Unidades');
$routes->get('borraidunidad/(:num)', 'U_Medida::eliminar_datos/$1');
$routes->get('pasaidunidad/(:num)', 'U_Medida::recupera/$1');
$routes->post('modifica_unidad', 'U_Medida::modificar');