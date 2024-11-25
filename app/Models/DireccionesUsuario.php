<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DireccionesUsuario extends Model{

    public $timestamps = false;
    
    protected $table = 'direcciones_usuarios';

    protected $fillable = ['id', 'id_pais', 'id_region', 'id_comuna', 'direccion', 'codigo_postal', 'direccion_principal'];

}
