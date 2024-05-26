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
        Schema::create('materia_tutor', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('id_materia');
            $table->foreign('id_materia')->references('id_materia')->on('materia');
            $table->integer('id_tutor');
            $table->foreign('id_tutor')->references('id_tutor')->on('tutores');
            $table->decimal('precio',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materia_tutor');
    }
};
