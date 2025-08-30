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
        Schema::create('encabezados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plantel_id'); 
            $table->string('nombre');
            $table->string('tipo');
            $table->text('descripcion');
            $table->timestamps();

            $table->foreign('plantel_id')->references('id')->on('planteles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encabezados');
    }
};
