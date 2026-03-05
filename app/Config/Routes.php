<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 * 
 */
$routes->get('header', 'Controlador::header');
//=========================================================================
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
$routes->get('lista_entrada', 'Entradas::lista_entrada');
$routes->get('Crea_entradas', 'Entradas::Crea_entrada');
$routes->post('Guardar_Entrada', 'Entradas::Guardar_Entrada');
$routes->get('borraid_entrada/(:num)', 'Entradas::eliminar_datos/$1');
$routes->get('pasaid_entrada/(:num)', 'Entradas::recupera/$1');
$routes->post('modifica_Entrada', 'Entradas::modificar');

//===============================================================================
$routes->get('Crea_Unidad', 'U_Medida::Crea_unidad');
$routes->post('Guarda_Unidad', 'U_Medida::Guarda_Unidad');
$routes->get('Mostrar_Unidades', 'U_Medida::Mostrar_Unidades');
$routes->get('borraidunidad/(:num)', 'U_Medida::eliminar_datos/$1');
$routes->get('pasaidunidad/(:num)', 'U_Medida::recupera/$1');
$routes->post('modifica_unidad', 'U_Medida::modificar');
//==============================================================================
$routes->get('alta_repartidor', 'Repartidores::alta_repartidor');
$routes->post('Crea_repartidor', 'Repartidores::Crea_repartidor');
$routes->get('lista_repartidor', 'Repartidores::lista_repartidor');
$routes->get('borra_id_repartidor/(:num)', 'Repartidores::eliminar_datos/$1');
$routes->get('pasa_id_repartidor/(:num)', 'Repartidores::recupera/$1');
$routes->post('modifica_repartidor', 'Repartidores::modificar');
//=============================================================================
$routes->get('alta_pedido', 'Pedidos::alta_pedido');

//=============================================================================
$routes->get('lista_credito', 'Creditos::lista_credito');
$routes->get('Crea_credito', 'Creditos::Crea_credito');
$routes->get('Guardar_credito', 'Creditos::Guardar_credito');
$routes->get('borcre_credito/(:num)', 'Creditos::eliminar_datos/$1');
$routes->get('pascre_credito/(:num)', 'Creditos::recupera/$1');
$routes->get('modifica_credito', 'Creditos::modifica_credito');
 
