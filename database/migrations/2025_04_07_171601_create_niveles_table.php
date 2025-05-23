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
    Schema::create('niveles', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');  // nombre del nivel (por ejemplo: medio superior)
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('niveles');
}

};
