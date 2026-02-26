<?php 
namespace App\Models;

use CodeIgniter\Model;

class Modelo_Entrada extends Model{
    protected $table      = 'entradas';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['fecha', 'precio_compra','precio_venta','cantidad','producto_id','unidad_medida_id'];
     
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