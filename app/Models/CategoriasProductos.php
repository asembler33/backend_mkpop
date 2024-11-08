<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriasProductos extends Model{

    protected $table = 'categorias_productos';
    protected $fillable = ['id', 'categoria'];
    
}
