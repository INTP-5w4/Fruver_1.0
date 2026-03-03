<?php 
namespace App\Models;

use CodeIgniter\Model;

class Modelo_pedido extends Model{
    protected $table      = 'undefined';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['fecha_inicio', 'fecha_fin', 'estatus', 'nota','total', 'cliente_id', 'repartidor_id'];
    
}