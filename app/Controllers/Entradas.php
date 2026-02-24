<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Entradas extends Controller{
    public function Crea_entrada(){
        return view('Crea_entradas');
    }
}