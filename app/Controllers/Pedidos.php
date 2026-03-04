<?php 
namespace App\Controllers;

use App\Models\Modelo_pedido;
use App\Models\Cliente_model;
use App\Models\Modelo_producto;
use App\Models\Modelo_Repartidor;
use CodeIgniter\Controller;

class Pedidos extends Controller{

public function alta_pedido(){
    return view('Crea_producto');
}
public function Crea_pedido(){
    $m_cliente = new Cliente_model();
    $m_producto = new Modelo_producto();
    $m_repartidor = new Modelo_Repartidor();
    $datos=[
            'clientes'=>$m_cliente->findAll(),
            'productos'=>$m_producto->findAll(),
            'repartidores'=>$m_repartidor->findAll(),
        ];
    return view('Crea_pedido', $datos);
}

public function Guarda_pedido(){
    $m_pedido= new Modelo_pedido();
    $datos_pedido=[
        'fecha_inicio'=>$this->request->getPost('fecha_i'),
        'fecha_fin'=>$this->request->getPost('fecha_f'),
        'estatus'=>$this->request->getPost('estatus'),
        'nota'=>$this->request->getPost('nota'),
        'total'=>$this->request->getPost('total'),
        'cliente_id'=>$this->request->getPost('cliente'),
        'repartidor_id'=>$this->request->getPost('repartidor'),
    ];
    if(
        empty($datos_pedido['fecha_inicio'])||
        empty($datos_pedido['fecha_fin'])||
        empty($datos_pedido['estatus'])||
        empty($datos_pedido['nota'])||
        empty($datos_pedido['total'])||
        empty($datos_pedido['cliente_id'])||
        empty($datos_pedido['repartidor_id'])
    ){
        $m_cliente = new Cliente_model();
        $m_producto = new Modelo_producto();
        $datos=[
            'clientes'=>$m_cliente->findAll(),
            'productos'=>$m_producto->findAll(),
        ];
        return view('crea_pedido', $datos);
    }else{
        $m_pedido->insert($datos_pedido);
        return view('main_page');
    }

}
}