<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tienda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tienda', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->boolean('abierto');
            $table->string('horario_atencion');
            $table->string('imagen_restaurante');    
            $table->string('logo_restaurante');   
            $table->UnsignedInteger('precio_minimo_delivery');
            $table->UnsignedInteger('precio_maximo_delivery');
            $table->Double('lat');
            $table->Double('long');
            $table->UnsignedFloat('radio');
            $table->string('telefono');
            $table->string('ubicacion');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tienda');
    }
}
