<?php 
namespace App\Models;

use CodeIgniter\Model;

class Modelo_Repartidor extends Model{
    protected $table      = 'repartidor';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'apellido', 'curp', 'rfc', 'domicilio', 'correo_electronico', 'telefono']; 
     public function borrar($id){
        if($this->delete($id))
            return true;
            else
                return false;
        
    }
    public function getrepartidor($id){
    return $this->where('id',$id)-> first();
    }
}