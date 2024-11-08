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
        Schema::create('comunas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_region');
            $table->string('comuna', 150);

            $table->foreign('id_region') // Nombre de la columna
                ->references('id') // Columna referenciada en la tabla `users`
                ->on('regiones') // Tabla referenciada
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comunas');
    }
};
