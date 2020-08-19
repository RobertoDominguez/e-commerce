<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    protected $table="tienda";
    protected $fillable=['abierto','nombre','email','horario_atencion','imagen_restaurante','logo_restaurante',
    'precio_minimo_delivery','precio_maximo_delivery','lat','long','radio','telefono','ubicacion'];
}
