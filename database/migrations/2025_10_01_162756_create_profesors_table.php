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
        Schema::create('profesors', function (Blueprint $table) {
            $table->id('IdProfesor');
            $table->string('Nombre',45);
            $table->string('ApellidoPaterno',25);
            $table->string('ApellidoMaterno',25);
            $table->string('CorreoElectronico')->unique();
            $table->string('CedulaProfesional',10)->unique();
            $table->string('CURP',18)->unique();

            $table->unsignedBigInteger('materia_id')->unsigned();
            $table->foreign('materia_id')->references('IdMateria')->on('materias')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesors');
    }
};
