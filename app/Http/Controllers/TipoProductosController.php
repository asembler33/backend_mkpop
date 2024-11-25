<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiposProductos;
use Illuminate\Support\Str;

class TipoProductosController extends Controller{


    public function getTipoProductos(){
        return TiposProductos::all();
    }

    public function getTipoProducto( $slugTipoProducto ){
        return TiposProductos::where( 'slug', $slugTipoProducto )->first();
    }

    public function saveTipoProducto(Request $request){

        
        TiposProductos::create([      
                "tipo_producto" => $request->json()->get('tipoProducto'),
                "slug" => Str::slug($request->json()->get('tipoProducto'))
            ]);

        return $this->getTipoProductos();


    }

    public function updateTipoProducto(Request $request, $id){

        
        $tipoProducto = TiposProductos::findOrFail($id);
        $tipoProducto->tipo_producto = $request->json()->get('tipoProducto');
        $tipoProducto->slug = Str::slug($request->json()->get('tipoProducto'));
        $tipoProducto->save();

        return $this->getTipoProductos();

    }

    public function deleteTipoProducto($id){

        $tipoProducto = TiposProductos::find($id);
        $tipoProducto->delete();

        return $this->getTipoProductos();
    }
    
}
