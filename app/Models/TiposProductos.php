<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TiposProductos extends Model{

    public $timestamps = false;
    use SoftDeletes;

    protected $table = 'tipos_productos';
    protected $fillable = ['id', 'tipo_producto', 'slug', 'deleted_at'];
    
}
