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
        Schema::create('dwws', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('CIF')->unique();
            $table->string('telefono');
            $table->string('direccion');
            $table->float('precio_principal');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dwws');
    }
};
