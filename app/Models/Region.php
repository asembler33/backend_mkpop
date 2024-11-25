<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model{
    public $timestamps = false;
    protected $table = 'regiones';
    
    protected $fillable = ['id', 'nombre_region'];

}
