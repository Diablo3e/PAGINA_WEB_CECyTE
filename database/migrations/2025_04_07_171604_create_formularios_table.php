<?php

// 2024_01_04_000000_create_formularios_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plantel_id');
            $table->unsignedBigInteger('carrera_id');
            $table->string('nombre_completo');
            $table->string('celular');
            $table->string('correo');
            $table->timestamps();

            // Foreign Keys
            $table->foreign('plantel_id')->references('id')->on('planteles')->onDelete('cascade');
            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('formularios');
    }
};
