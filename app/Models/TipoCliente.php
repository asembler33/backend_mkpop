<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoCliente extends Model{
    public $timestamps = false;
    protected $table = 'tipo_clientes';
    protected $fillable = ['id', 'tipo_cliente'];
}
