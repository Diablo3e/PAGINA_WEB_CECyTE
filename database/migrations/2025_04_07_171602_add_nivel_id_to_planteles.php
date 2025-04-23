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
        Schema::create('planteles', function (Blueprint $table) {
            $table->id();
            $table->string('clave'); // como plantel1, plantel2...
            $table->string('nombre');
            $table->string('direccion');
            $table->unsignedBigInteger('nivel_id')->nullable(); // Relación con la tabla niveles
            $table->timestamps();

            // Definimos la llave foránea
            $table->foreign('nivel_id')->references('id')->on('niveles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('planteles');
    }
};
