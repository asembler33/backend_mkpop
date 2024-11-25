<?php

namespace App\Http\Controllers;
use App\Models\TipoCliente;
use Illuminate\Http\Request;

class TipoClienteController extends Controller{
    

    function getTiposClientes(){

        return TipoCliente::all();
    }


}
