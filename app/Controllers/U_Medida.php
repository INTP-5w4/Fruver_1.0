<?php 
namespace App\Controllers;
use App\Models\Modelo_Unidad;
use CodeIgniter\Controller;

class U_Medida extends Controller{
    public function Crea_unidad(){
        return view('Crea_Unidad');
    }
    public function Guarda_Unidad(){
    $m_unidad = new Modelo_Unidad();
    $datos_de_unidad=[
            'nombre'=>$this->request->getPost('nom'),
            'abreviacion'=>$this->request->getPost('abrev')
        ];
        if(empty($datos_de_unidad['nombre'])||
        empty($datos_de_unidad['abreviacion'])){
            return view('Crea_Unidad');
        }else{
        $m_unidad->insert($datos_de_unidad);
        }
    }
     public function Mostrar_Unidades(){
        $m_unidad= new Modelo_Unidad();
        $n=$m_unidad->findAll();
        $datos_de_unidad=['unidades'=>$n];
        return view('lista_unidad', $datos_de_unidad);
    }
    public function eliminar_datos($id=null){
        if ($id!=null)
        $m_unidad= new Modelo_Unidad();
        $n=$m_unidad->findAll();
        $datos_de_unidad=['unidades'=>$n];
        if ($m_unidad->borrar($id)==true)
            return view('lista_unidad',$datos_de_unidad);
        else
            echo 'Algo ha fallado';
    }
    public function recupera($id=null){
        if($id!=null){
            $m_unidad= new Modelo_Unidad();
            $datos['unidades']=$m_unidad->getunidad($id);
        return view('modifica_unidad',$datos);
        }
    }
    public function modificar(){
        $id=$this->request->getPost('id');
         $datos_de_unidad=[
            'nombre'=>$this->request->getPost('nom'),
            'abreviacion'=>$this->request->getPost('abrev'),
         ];
         return view('modifica_unidad',$datos_de_unidad);
}
}