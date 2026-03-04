<?php 
namespace App\Models;

use CodeIgniter\Model;

class Modelo_credito extends Model{
    protected $table      = 'credito';
    protected $primaryKey = "id";
    
    protected $allowedFields = ['fecha_inicio','fecha_fin','monto','estatus','credito_disponible','cliente_id'];
    
    public function getcredito($id){
        return $this->where('id',$id)-> first();
    }
    
    public function borrar($id){
        if($this->delete($id))
            return true;
            else
                return false;
        
    }
   
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
}