<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoProductosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\DireccionesUsuarioController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ComunaController;
use App\Http\Controllers\UsuariosController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// Route::group(['middleware' => 'cors'], function () {
    //     Route::group(['prefix' => 'productos'], function () {
        //         Route::controller(ProductosController::class)->group(function (){
            //             Route::get('/lista', 'getTipoProductos'); // Obtener todos los usuarios
            //             Route::get('/{tipo_producto}', 'getTipoProducto'); // Obtener todos los usuarios
            //             Route::post('/guardarTipoProducto', 'saveTipoProducto'); // Crear un nuevo usuario
            //             Route::put('/actualizarTipoProducto/{id}', 'updateTipoProducto'); // Actualizar un usuario
            //             Route::delete('/eliminarTipoProducto/{id}', 'destroyTipoProducto'); // Eliminar un usuario
            //         });
            //     });
            // });

    Route::group(['prefix' => 'usuarios'], function () {
        Route::controller(UsuariosController::class)->group(function (){
            Route::get('/lista', 'getUsers'); // Obtener todos los usuarios
            Route::get('/{idUsuario}', 'getUser'); // Obtener todos los usuarios
            Route::post('/guardarUsuario', 'saveUser'); // Crear un nuevo usuario
            Route::put('/actualizarUsuario/{idUsuario}', 'updateUser'); // Actualizar un usuario
            Route::delete('/eliminarUsuario/{idUsuario}', 'deleteUser'); // Eliminar un usuario
        });      
    });
    Route::group(['prefix' => 'tipos_productos'], function () {
        Route::controller(TipoProductosController::class)->group(function (){
            Route::get('/lista', 'getTipoProductos'); // Obtener todos los usuarios
            Route::get('/{tipo_producto}', 'getTipoProducto'); // Obtener todos los usuarios
            Route::post('/guardarTipoProducto', 'saveTipoProducto'); // Crear un nuevo usuario
            Route::put('/actualizarTipoProducto/{id}', 'updateTipoProducto'); // Actualizar un usuario
            Route::delete('/eliminarTipoProducto/{id}', 'deleteTipoProducto'); // Eliminar un usuario
        });      
    });



    Route::group(['prefix' => 'direcciones'], function () {
        Route::controller(DireccionesUsuarioController::class)->group(function (){
            Route::get('/lista', 'getDireccionesUsuarios'); // Obtener todos los usuarios
            Route::get('/{id}', 'getDireccionUsuario'); // Obtener todos los usuarios
            Route::post('/guardarTipoProducto', 'saveDireccionUsuario'); // Crear un nuevo usuario
            Route::put('/actualizarDireccionUsuario/{id}', 'updateDireccionUsuario'); // Actualizar un usuario
            Route::delete('/eliminarDireccionUsuario/{id}', 'deleteDireccionUsuario'); // Eliminar un usuario
        });
    });



    Route::group(['prefix' => 'regiones'], function () {
        Route::controller(RegionController::class)->group(function (){
            Route::get('/lista', 'getRegiones'); 
            Route::get('/{id}', 'getDireccionUsuario'); 
        }); 
    });



    Route::group(['prefix' => 'comunas'], function () {
        Route::controller(ComunaController::class)->group(function (){
            Route::get('/{id_region}', 'getComunas'); 
        }); 
    });
