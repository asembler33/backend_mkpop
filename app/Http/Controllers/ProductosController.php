<?php

namespace App\Http\Controllers;
use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller{

   
    function getCategoriasProductos(){

        return Productos::all();

    }


}
