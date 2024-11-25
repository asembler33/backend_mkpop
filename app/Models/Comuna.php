<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model{
    
    public $timestamps = false;
    protected $table = 'comunas';
    protected $fillable = ['id', 'id_region', 'comuna'];
}
