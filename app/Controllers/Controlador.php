<?php

namespace App\Controllers;
use App\Models\Modelo_producto;
class Controlador extends BaseController
{
    public function index(): string
    {
        return view('main_page');
    }
    public function crea_producto(){
        return view('crea_producto');
    }
    public function guardar_producto(){
    $m_producto = new Modelo_producto();
    $datos_de_producto=[
            'nombre'=>$this->request->getPost('nom'),
            'unidad_medida'=>$this->request->getPost('u_med'),
            'descripcion'=>$this->request->getPost('desc')
        ];
        if(empty($datos_de_producto['nombre'])||
        empty($datos_de_producto['unidad_medida'])||
        empty($datos_de_producto['descripcion'])){
            return view('crea_producto');
        }else{
        $m_producto->insert($datos_de_producto);
        }
    
    }
    public function lista_producto(){
        $m_producto= new Modelo_producto();
        $n=$m_producto->findAll();
        $datos_de_producto=['productos'=>$n];
        return view('lista_producto', $datos_de_producto);
    }
     public function eliminar_datos($id=null){
        if ($id!=null)
        $m_producto= new Modelo_producto();
        $n=$m_producto->findAll();
        $datos_de_producto=['productos'=>$n];
        if ($m_producto->borrar($id)==true)
            return view('lista_producto');
        else
            echo 'Algo ha fallado';
    }
     
}
