<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->string('imagen',250);
            $table->String('imagen_icono',250);
            $table->string('nombre',60);
            $table->string('descripcion',250);
            $table->UnsignedFloat('precio');
            $table->boolean('disponible');
            $table->boolean('eliminado');
            $table->boolean('es_extra');
            $table->UnsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categoria')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('producto');
    }
}
