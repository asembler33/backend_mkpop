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
        Schema::table('productos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user')->after('id');
            $table->unsignedBigInteger('id_tipo_producto')->after('id_user');
            $table->unsignedBigInteger('id_region')->after('id_tipo_producto');
            $table->unsignedBigInteger('id_comuna')->after('id_region');
            $table->string('titulo',150);
            $table->text('descripcion');
            $table->float('precio_venta',1);
            $table->float('comision',1);
            $table->softDeletes();

            $table->foreign('id_user') // Nombre de la columna
                ->references('id') // Columna referenciada en la tabla `users`
                ->on('users') // Tabla referenciada
                ->onDelete('cascade');

            $table->foreign('id_region') // Nombre de la columna
                ->references('id') // Columna referenciada en la tabla `users`
                ->on('regiones') // Tabla referenciada
                ->onDelete('cascade');

            $table->foreign('id_comuna') // Nombre de la columna
                ->references('id') // Columna referenciada en la tabla `users`
                ->on('comunas') // Tabla referenciada
                ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_productos');
    }
};
