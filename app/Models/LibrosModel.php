<?php 
namespace App\Models;

use CodeIgniter\Model;

class LibrosModel extends Model{
    protected $table = 'libros';
    
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';

    //Fields of table
    protected $allowebFieds = ['nombre', 'imagenes'];
}