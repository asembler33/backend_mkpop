<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'productos'], function () {
    Route::get('/', 'UserController@index'); // Obtener todos los usuarios
    Route::get('/categorias', 'UserController@index'); // Obtener todos los usuarios
    Route::post('/', 'UserController@store'); // Crear un nuevo usuario
    Route::get('/{id}', 'UserController@show'); // Obtener un usuario por ID
    Route::put('/{id}', 'UserController@update'); // Actualizar un usuario
    Route::delete('/{id}', 'UserController@destroy'); // Eliminar un usuario
});

