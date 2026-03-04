<?php 
namespace App\Models;

use CodeIgniter\Model;

class Modelo_producto_pedido extends Model{
    protected $table      = 'producto_pedido';
    protected $primaryKey = 'id';

    protected $allowedFields = ['producto_precio','cantidad','pedido_id','producto_id',];

    public function getproducto_pedido($id){
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