<?php 
namespace App\Models;

use CodeIgniter\Model;

class Modelo_Unidad extends Model{
    protected $table      = 'unidad_medida';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','abreviacion'];
    
    public function borrar($id){
        if($this->delete($id))
            return true;
            else
                return false;
        
    }
}