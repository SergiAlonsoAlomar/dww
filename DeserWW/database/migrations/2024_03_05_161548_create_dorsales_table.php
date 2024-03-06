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
        Schema::create('dorsales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_corredor');
            $table->unsignedBigInteger('id_carrera');
            $table->string('qr');
            // Otras columnas que puedas necesitar
            $table->timestamps();

            // Claves foráneas
            $table->foreign('id_corredor')->references('id')->on('corredores');
            $table->foreign('id_carrera')->references('id')->on('carreras');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dorsales');
    }
};
