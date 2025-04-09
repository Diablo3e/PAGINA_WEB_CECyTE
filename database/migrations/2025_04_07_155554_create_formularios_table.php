<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('formularios', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('modalidad_id');
        $table->unsignedBigInteger('nivel_id');
        $table->unsignedBigInteger('plantel_id');
        $table->unsignedBigInteger('carrera_id');
        $table->string('nombre_completo');
        $table->string('celular');
        $table->string('correo');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formularios');
    }
};
