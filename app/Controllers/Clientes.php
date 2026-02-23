<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Cliente_model;
class Clientes extends Controller{

public function lista_clientes(){
    $mcliente = new Cliente_model();
    $datos['clientes']=$mcliente -> findAll();
    return view('lista_clientes',$datos);
}

public function crea_cliente(){
    return view('crea_cliente');
}

public function guardar_cliente(){
    $mcliente= new Cliente_model();
    $datos_cliente=[
        'nombre'=>$this->request->getPost('nome'),
        'apellido'=>$this->request->getPost('apel'),
        'calle'=>$this->request->getPost('calle'),
        'colonia'=>$this->request->getPost('col'),
        'numero'=>$this->request->getPost('nume'),
        'rfc'=>$this->request->getPost('rfc'),
        'tipo_cliente'=>$this->request->getPost('t_cliente'),
        'telefono'=>$this->request->getPost('tele'),
        'tipo_credito'=>$this->request->getPost('t_credito')
    ];
    if(empty($datos_cliente['nombre'])||
    empty($datos_cliente['apellido'])||
    empty($datos_cliente['calle'])||
    empty($datos_cliente['colonia'])||
    empty($datos_cliente['numero'])||
    empty($datos_cliente['rfc'])||
    empty($datos_cliente['tipo_cliente'])||
    empty($datos_cliente['telefono'])||
    empty($datos_cliente['tipo_credito'])){
        return view('crea_cliente');
        }else{
            $mcliente->insert($datos_cliente);
            return redirect()->to(base_url('lista'));
        }
    }
public function elimina_cliente($id = null) {
    if ($id != null) {
        $mcliente = new Cliente_model();
        $mcliente->delete($id);
    }
    return redirect()->to(base_url('lista'));
}

public function recupera_cliente($id=null){
    if($id!=null){
        $mcliente= new Cliente_model();
        $datos['clientes']=(array)$mcliente->getCliente($id);
        return view('modifica_cliente',$datos);
    }

}
public function edita_cliente(){
    $id=$this->request->getPost('id');
    $datos_cliente=[
        'nombre'=>$this->request->getPost('nome'),
        'apellido'=>$this->request->getPost('apel'),
        'calle'=>$this->request->getPost('calle'),
        'colonia'=>$this->request->getPost('col'),
        'numero'=>$this->request->getPost('nume'),
        'rfc'=>$this->request->getPost('rfc'),
        'tipo_cliente'=>$this->request->getPost('t_cliente'),
        'telefono'=>$this->request->getPost('tele'),
        'tipo_credito'=>$this->request->getPost('t_credito')
    ];
    $mcliente = new Cliente_model();
    if($mcliente->update($id,$datos_cliente)){

    return redirect()-> to(base_url('lista'));
    }
}


}