<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExtraDetalleVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_detalle_venta', function (Blueprint $table) {
            $table->id();
            $table->UnsignedInteger('cantidad');
            $table->string('nombre_extra',60);
            $table->UnsignedFloat('total');
            $table->UnsignedBigInteger('id_extra');
            $table->foreign('id_extra')->references('id')->on('producto')->onDelete('cascade')->onUpdate('cascade');
            $table->UnsignedBigInteger('id_detalle_venta');
            $table->foreign('id_detalle_venta')->references('id')->on('detalle_venta')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('extra_detalle_venta');
    }
}
