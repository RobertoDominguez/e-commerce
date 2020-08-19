<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Delivery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery', function (Blueprint $table) {
            $table->UnsignedBigInteger('id_venta')->primary();
            $table->foreign('id_venta')->references('id')->on('venta')->onDelete('cascade')->onUpdate('cascade');
            $table->Double('lat');
            $table->Double('long');
            $table->UnsignedFloat('costo');
            $table->string('ubicacion',250);
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
        Schema::dropIfExists('delivery');
    }
}
