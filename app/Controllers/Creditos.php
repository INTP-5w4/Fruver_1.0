<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Modelo_Credito;
use App\Models\Cliente_model;

class Creditos extends Controller{
    public function Crea_credito(){
    $mcliente = new Cliente_model();
    $datos_c=[
    'cliente'=>$mcliente-> findAll(),
    ];
    return view('Crea_credito', $datos_c);
}
    public function Guardar_credito(){
        $m_credito= new Modelo_Credito();
        $datos_del_credito=[
            'fecha_inicio'=>$this->request->getPost('fecha_inicio'),
            'fecha_fin'=>$this->request->getPost('fecha_fin'),
            'monto'=>$this->request->getPost('monto'),
            'estatus'=>$this->request->getPost('estatus'),
            'credito_disponible'=>$this->request->getPost('credito_disponible'),
            'cliente_id'=>$this->request->getPost('cliente_id'),
        ];
        if (empty($datos_del_credito['fecha_inicio']) ||
            empty($datos_del_credito['fecha_fin']) ||
            empty($datos_del_credito['monto']) ||
            empty($datos_del_credito['estatus']) ||
            empty($datos_del_credito['credito_disponible']) ||
            empty($datos_del_credito['cliente_id'])){
            $mcliente = new Cliente_model();
            $datos_c = [
            'cliente'=>$mcliente-> findAll(),
        ];
            return view('Crea_credito', $datos_c);
            }else{
            $m_credito->insert($datos_del_credito);
            return $this->lista_credito();
        }

    }
    public function lista_credito(){
        $m_credito= new Modelo_Credito();
        $n=$m_credito->findALL();
        $datos_de_credito=['credito'=>$n];
        return view('lista_credito', $datos_de_credito);
        }
        public function eliminar_datos($id=null){
        if ($id!=null)
        $m_credito= new Modelo_Credito();
        $n=$m_credito->findAll();
        $datos_de_credito=['credito'=>$n];
        if ($m_credito->borrar($id)==true)
            return view('lista_credito', $datos_de_credito);
        else
            echo 'Algo ha fallado';
    }
    public function recupera($id=null){
        if($id!=null){
            $m_credito= new Modelo_Credito();
            $mcliente = new Cliente_model();
            $datos_c=[
            'cliente'=>$mcliente->findALL($id),
            'credito'=>$m_credito->getentrada($id)
    ];
        return view('modifica_credito', $datos_c);
        }}
    public function modifica_credito(){
        $m_credito= new Modelo_Credito();
        $id= $this->request->getPost('id');
        $datos_credito=[
            'fecha_inicio'=>$this->request->getPost('fecha_inicio'),
            'fecha_fin'=>$this->request->getPost('fecha_fin'),
            'monto'=>$this->request->getPost('monto'),
            'estatus'=>$this->request->getPost('estatus'),
            'credito_disponible'=>$this->request->getPost('credito_disponible'),
            'cliente_id'=>$this->request->getPost('cliene_id'),
        ];
        if($m_credito->update($id,$datos_credito)){
            return $this->lista_credito();
        }
    }
}