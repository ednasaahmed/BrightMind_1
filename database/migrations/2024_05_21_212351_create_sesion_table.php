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
        Schema::create('sesiones', function (Blueprint $table) {
            $table->integer('id_sesion')->autoIncrement();
            $table->integer('id_tutor');
            $table->foreign('id_tutor')->references('id_tutor')->on('tutores');
            $table->integer('id_estudiante');
            $table->foreign('id_estudiante')->references('id_estudiante')->on('estudiantes');
            $table->date('fecha');
            $table->integer('id_materia');
            $table->foreign('id_materia')->references('id_materia')->on('materia');
            // $table->time('hora_inicio');
            // $table->time('hora_fin');
            $table->binary('estado');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sesion');
    }
};
