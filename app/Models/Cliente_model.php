<?php 
namespace App\Models;

use CodeIgniter\Model;

class Cliente_model extends Model{
    protected $table      = 'cliente';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','apellido','calle','colonia','numero','rfc','tipo_cliente','telefono','tipo_credito'];

    public function getCliente($id){
    return $this->where('id', $id)->first();
}
}