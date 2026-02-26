<?php

namespace App\Controllers;
use App\Models\Modelo_producto;
use App\Models\Modelo_Unidad;
class Controlador extends BaseController
{
    public function index(): string
    {
        return view('main_page');
    }
    public function crea_producto()
{
    $m_unidad = new Modelo_Unidad();
    $datos['unidades'] = $m_unidad->findAll();
    return view('crea_producto', $datos);
}
    public function guardar_producto(){
    $m_producto = new Modelo_producto();
    $datos_de_producto = [
        'nombre'           => $this->request->getPost('nom'),
        'descripcion'      => $this->request->getPost('desc'),
        'id_unidad_medida' => $this->request->getPost('u_med') 
    ];
    if (empty($datos_de_producto['nombre']) || 
        empty($datos_de_producto['id_unidad_medida'])){
        $m_unidad = new Modelo_Unidad();
        $datos['unidades'] = $m_unidad->findAll();
        return view('crea_producto', $datos);
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
     
    public function recupera($id=null){
        if($id!=null){
            $m_producto= new Modelo_producto();
            $datos['productos']=$m_producto->getproducto($id);
        return view('modifica',$datos);
        }
    }

    public function modificar(){
        $id=$this->request->getPost('id');
         $datos_de_producto=[
            'nombre'=>$this->request->getPost('nom'),
            'descripcion'=>$this->request->getPost('desc'),
            'id_unidad_medida'=>$this->request->getPost('u_med'),
         ];
         $m_producto= new Modelo_producto();
         if($m_producto->update($id,$datos_de_producto)){
            //echo "Datos almacenados exitosamente";
            return redirect()->to(base_url('lista_producto'));
         }
    }
}
