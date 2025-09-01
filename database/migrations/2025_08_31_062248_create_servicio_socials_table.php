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
        Schema::create('servicio_social', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plantel_id');
            $table->string('institucion');
            $table->text('descripcion');
            $table->string('correo');
            $table->string('telefono');
            $table->string('direccion');
            $table->timestamps();

            $table->foreign('plantel_id')->references('id')->on('planteles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicio_social');
    }
};
