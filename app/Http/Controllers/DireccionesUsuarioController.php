<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DireccionesUsuario;

class DireccionesUsuarioController extends Controller{
    
    public function getDireccionesUsuarios(){

        return DireccionesUsuario::all();
    }

    public function getDireccionUsuario( $id ){

        return DireccionesUsuario::findOrFail($id);
    }

    public function saveDireccionUsuario(Request $request){

        DireccionesUsuario::create(
            [
                "id_pais" => $request->json('tipoProducto'), 
                "id_region" => $request->json('selectRegion'), 
                "id_comuna" => $request->json('selectComuna'), 
                "direccion" => $request->json('direccion'), 
                "codigo_postal" => $request->json('codigoPostal'), 
                "tipo_producto" => $request->json('tipoProducto'), 
                "direccion_principal" => $request->json('direccionPrincipal'), 
            ]
        );

        return $this->getDireccionesUsuarios();

    }

    public function updateDireccionUsuario(Request $request, $id){

    }

    public function deleteDireccionUsuario( $id ){}

}
