<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='producto';
    protected $fillable=
    ['nombre','descripcion','precio','imagen','imagen_icono','id_categoria','disponible','eliminado','es_extra'];
}
