<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('plantel_carrera', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plantel_id');
            $table->unsignedBigInteger('carrera_id');
            $table->timestamps();

            $table->foreign('plantel_id')->references('id')->on('planteles')->onDelete('cascade');
            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete('cascade');

            $table->unique(['plantel_id', 'carrera_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('plantel_carrera');
    }
};
