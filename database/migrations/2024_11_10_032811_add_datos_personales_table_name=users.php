<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
        
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('id_region')->after('id');
            $table->unsignedBigInteger('id_comuna')->after('id_region');
            $table->renameColumn('name', 'username');
            $table->string('rut', 15)->after('username');
            $table->string('nombres', 100)->after('username');
            $table->string('apellido_paterno', 100)->after('username');
            $table->string('apellido_materno', 100)->after('apellido_paterno');
            $table->softDeletes();

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
        //
    }
};
