<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Venta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->id();
            $table->string('comentario',250);
            $table->string('comentario_respuesta',250);
            $table->UnsignedFloat('total');
            $table->UnsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('cliente')->onDelete('cascade')->onUpdate('cascade');
            $table->UnsignedBigInteger('id_metodo_pago');
            $table->foreign('id_metodo_pago')->references('id')->on('metodo_pago')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('es_delivery');
            $table->boolean('aceptado');
            $table->boolean('rechazado');
            $table->boolean('entregado');
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
        Schema::dropIfExists('venta');
    }
}
