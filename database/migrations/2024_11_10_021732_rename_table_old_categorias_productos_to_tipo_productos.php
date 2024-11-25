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
        Schema::rename('categorias_productos', 'tipos_productos');
        Schema::table('tipos_productos', function (Blueprint $table) {
            $table->renameColumn('categoria_producto', 'tipo_producto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tipo_productos', function (Blueprint $table) {
            //
        });
    }
};
