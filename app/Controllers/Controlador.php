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
            'nombre'=>$this->request->getpost('nom'),
            'unidad_medida'=>$this->request->getpost('u_med'),
            'descripcion'=>$this->request->getpost('desc')
        ];
        if(empty($datos_de_producto['nombre'])||
        empty($datos_de_producto['unidad_medida'])||
        empty($datos_de_producto['desc'])){
            return view('crea_producto');
        }else{
        $m_producto->insert($datos_de_producto);
        }
    
    }
     
}
