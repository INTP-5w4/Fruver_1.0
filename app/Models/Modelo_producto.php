<?php 
namespace App\Models;

use CodeIgniter\Model;

class Modelo_producto extends Model{
    protected $table      = 'producto';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','unidad_medida','descripcion']
}