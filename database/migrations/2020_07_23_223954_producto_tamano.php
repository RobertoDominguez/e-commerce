<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductoTamano extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_tamano', function (Blueprint $table) {
            $table->id();
            $table->unsignedFloat('precio_extra');
            $table->boolean('eliminado');
            $table->UnsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('producto')->onDelete('cascade')->onUpdate('cascade');
            $table->UnsignedBigInteger('id_tamano');
            $table->foreign('id_tamano')->references('id')->on('tamano')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('producto_tamano');
    }
}
