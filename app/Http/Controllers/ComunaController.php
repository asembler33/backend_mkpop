<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comuna;

class ComunaController extends Controller{
    
    
    public function getComunas($id){
    
        return Comuna::where('id_region', $id)->orderBy('comuna', 'asc')->get();

    }

}
