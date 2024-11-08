<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('rel_direcciones_usuarios', function (Blueprint $table) {
            // Agregar claves foráneas
            $table->foreign('id_user') // Nombre de la columna
                  ->references('id') // Columna referenciada en la tabla `users`
                  ->on('users') // Tabla referenciada
                  ->onDelete('cascade'); // Acción opcional al borrar un `user`
        
            $table->foreign('id_direccion') // Nombre de la columna
                  ->references('id') // Columna referenciada en la tabla `direcciones_usuarios`
                  ->on('direcciones_usuarios') // Tabla referenciada
                  ->onDelete('cascade'); // Acción opcional al borrar un `direccion`
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rel_direcciones_usuarios');
    }
};
