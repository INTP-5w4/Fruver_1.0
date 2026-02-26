<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Modelo_merma;
class Merma extends Controller{

public function crea_merma(){
    $mentrada = new Modelo_merma();
    $datos['entradas'] = $mentrada->findAll();
    return view('crea_merma', $datos);
}
public function guardar_merma(){
    $mmerma = new Merma_model();
    $datos_merma = [
        'entradas_id' => $this->request->getPost('entrada'),
        'cantidad'    => $this->request->getPost('cantidad'),
        'fecha'       => $this->request->getPost('fecha'),
        'descripcion' => $this->request->getPost('descripcion')
    ];
    if(empty($datos_merma['entradas_id']) ||
       empty($datos_merma['cantidad']) ||
       empty($datos_merma['fecha']) ||
       empty($datos_merma['descripcion'])){
        return redirect()->to(base_url('crea_merma'));
    } else {
        $mmerma->insert($datos_merma);
        return redirect()->to(base_url('lista_merma'));
    }

}
public function lista_merma(){
    $mmerma = new Modelo_merma();
    $datos['mermas'] = $mmerma->findAll();
    return view('lista_merma', $datos);
}
}