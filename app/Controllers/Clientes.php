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
    return view('crea_cliente',$datos);
}

}