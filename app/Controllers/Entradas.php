<?php 
namespace App\Controllers;
use App\Models\Modelo_Entrada;
use App\Models\Modelo_Unidad;
use App\Models\Modelo_producto;
use CodeIgniter\Controller;

class Entradas extends Controller{
    public function Crea_entrada(){
    $m_unidad = new Modelo_Unidad();
    $m_producto = new Modelo_producto();    
    $datos=[
    'productos'=>$m_producto->findAll(),
    'unidades'=>$m_unidad->findAll(),
    ];
    return view('Crea_entradas', $datos);
}
    public function Guardar_Entrada(){
        $m_entrada= new Modelo_Entrada();
        $datos_de_la_entrada=[
            'fecha'=>$this->request->getPost('fecha'),
            'precio_compra'=>$this->request->getPost('precio_compra'),
            'precio_venta'=>$this->request->getPost('precio_venta'),
            'cantidad'=>$this->request->getPost('cant'),
            'producto_id'=>$this->request->getPost('prod_id'),
            'unidad_medida_id'=>$this->request->getPost('u_med')

        ];
        if (empty($datos_de_la_entrada['fecha']) ||
            empty($datos_de_la_entrada['precio_compra']) ||
            empty($datos_de_la_entrada['precio_venta']) ||
            empty($datos_de_la_entrada['cantidad']) ||
            empty($datos_de_la_entrada['producto_id']) ||
            empty($datos_de_la_entrada['unidad_medida_id'])){
            $m_unidad = new Modelo_Unidad();
            $m_producto = new Modelo_producto();
            $datos = [
            'unidades'  => $m_unidad->findAll(),
            'productos' => $m_producto->findAll(),
        ];
            return view('Crea_entradas', $datos);
            }else{
            $m_entrada->insert($datos_de_la_entrada);
            return $this->lista_entrada();
        }
    
    }
    public function lista_entrada(){
        $m_entrada= new Modelo_Entrada();
        $n=$m_entrada->findAll();
        $datos_de_entrada=['entradas'=>$n];
        return view('lista_entradas', $datos_de_entrada);
        }
        public function eliminar_datos($id=null){
        if ($id!=null)
        $m_entrada= new Modelo_Entrada();
        $n=$m_entrada->findAll();
        $datos_de_entrada=['entradas'=>$n];
        if ($m_entrada->borrar($id)==true)
            return view('lista_entrada');
        else
            echo 'Algo ha fallado';
    }
    public function recupera($id=null){
        if($id!=null){
            $m_entrada= new Modelo_Entrada();
            $m_unidad= new Modelo_Unidad();
            $m_producto= new Modelo_producto();
            $datos=[
            'productos'=>$m_producto->findAll($id),
            'unidades'=>$m_unidad->findAll($id),
            'entradas'=>$m_entrada->getentrada($id)
    ];
        return view('modifica_entrada',$datos);
        }}
    public function modificar(){
        $m_entrada= new Modelo_Entrada();
        $id= $this->request->getPost('id');
        $datos_entrada=[
            'fecha'=>$this->request->getPost('fecha'),
            'precio_compra'=>$this->request->getPost('precio_compra'),
            'precio_venta'=>$this->request->getPost('precio_venta'),
            'cantidad'=>$this->request->getPost('cant'),
            'u_med'=>$this->request->getPost('u_med'),
            'producto_asignado'=>$this->request->getPost('prod_id'),
        ];
        if($m_entrada->update($id,$datos_entrada)){
            return $this->lista_entrada();
        }
    }
}