<?php

namespace App\Models;

use CodeIgniter\Model;

class PeliculaModel extends Model
{
    protected $table  = 'pelicula';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['titulo', 'descripcion'];        
}
