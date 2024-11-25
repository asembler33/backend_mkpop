<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getUsers(){
        return DB::select("SELECT id, rut, CONCAT_WS(' ',nombres, apellido_paterno) AS nombre_completo, direccion, ubicacion FROM users");
    }

    public function getUser($id){
        return User::find($id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function saveUser(Request $request){
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateUser(Request $request, string $id){
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteUser(string $id){
        
    }
}
