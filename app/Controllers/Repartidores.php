<?php 
namespace App\Controllers;

use App\Models\Modelo_Repartidor;
use CodeIgniter\Controller;

class Repartidores extends Controller{
    public function alta_repartidor(){
        return view('Crea_repartidor');
    }
    public function Crea_repartidor(){
        $m_repartidor=new Modelo_Repartidor();
        $datos_repartidor=[
            'nombre'=>$this->request->getPost('nom'),
            'apellido'=>$this->request->getPost('ape'),
            'curp'=>$this->request->getPost('curp'),
            'rfc'=>$this->request->getPost('rfc'),
            'domicilio'=>$this->request->getPost('dom'),
            'correo_electronico'=>$this->request->getPost('correo'),
            'telefono'=>$this->request->getPost('tel'),
        ];
        if (empty($datos_repartidor['nombre'])||
            empty($datos_repartidor['apellido'])||
            empty($datos_repartidor['curp'])||
            empty($datos_repartidor['rfc'])||
            empty($datos_repartidor['domicilio'])||
            empty($datos_repartidor['correo_electronico'])||
            empty($datos_repartidor['telefono'])){
                return view('Crea_repartidor');
        } else {
            $m_repartidor->insert($datos_repartidor);
            return view('main_page');
        }

        
    }
    public function lista_repartidor(){
        $m_repartidor = new Modelo_Repartidor();
        $n= $m_repartidor->findAll();
        $datos_repartidor=['repartidores'=>$n];
        return view('lista_repartidor',$datos_repartidor);
    }
    public function eliminar_datos($id=null){
        if ($id!=null)
        $m_repartidor= new Modelo_Repartidor();
        $n=$m_repartidor->findAll();
        $datos_de_repartidor=['repartidores'=>$n];
        if ($m_repartidor->borrar($id)==true)
            return view('lista_repartidor', $datos_de_repartidor);
        else
            echo 'Algo ha fallado';
    }
     public function recupera($id=null){
        if($id!=null){
            $m_repartidor= new Modelo_Repartidor();
            $datos['repartidores']=$m_repartidor->getrepartidor($id);
        return view('modifica_repartidor',$datos);
        }
    }
    public function modificar(){
        $id=$this->request->getPost('id');
         $datos_repartidor=[
            'nombre'=>$this->request->getPost('nom'),
            'apellido'=>$this->request->getPost('ape'),
            'curp'=>$this->request->getPost('curp'),
            'rfc'=>$this->request->getPost('rfc'),
            'domicilio'=>$this->request->getPost('dom'),
            'correo_electronico'=>$this->request->getPost('correo'),
            'telefono'=>$this->request->getPost('tel'),
        ];
        $m_repartidor= new Modelo_Repartidor();
        $m_repartidor->update($id,$datos_repartidor);
        $n=$m_repartidor->findAll();
        $datos_repartidor=['repartidores'=>$n];
            return view('lista_repartidor',$datos_repartidor);
        
    }
    
}