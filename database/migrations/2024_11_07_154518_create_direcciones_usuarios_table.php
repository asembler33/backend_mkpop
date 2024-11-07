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
        Schema::create('direcciones_usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_pais');
            $table->unsignedInteger('id_region');
            $table->unsignedInteger('id_comuna');
            $table->string('direccion', 200);
            $table->string('codigo_postal', 100);
            $table->boolean('direccion_principal')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direcciones_usuarios');
    }
};
