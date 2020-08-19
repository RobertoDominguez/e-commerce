<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetalleVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_venta', function (Blueprint $table) {
            $table->id();
            $table->UnsignedInteger('cantidad');
            $table->UnsignedFloat('costo_extra_tamano');
            $table->UnsignedFloat('costo_producto');
            $table->string('instruccion_especial',250);
            $table->string('nombre_producto',60);
            $table->string('nombre_tamano',60);
            $table->UnsignedFloat('total');
            $table->UnsignedBigInteger('id_tamano');
            $table->foreign('id_tamano')->references('id')->on('tamano')->onDelete('cascade')->onUpdate('cascade');
            $table->UnsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('producto')->onDelete('cascade')->onUpdate('cascade');
            $table->UnsignedBigInteger('id_venta');
            $table->foreign('id_venta')->references('id')->on('venta')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('detalle_venta');
    }
}
