<?php 
namespace App\Models;

use CodeIgniter\Model;

class Modelo_Credito extends Model{
    protected $table      = 'Credito';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['fecha_inicio', 'fecha_fin', 'monto', 'estatus', 'credito_disponible', 'cliente_id'];

    public function getentrada($id){
        return $this->where('id',$id)-> first();
    }

    public function borrar($id){
        if($this->delete($id))
            return true;
        else
            return false;
    }
}