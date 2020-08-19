<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table='detalle_venta';
    protected $fillable=['cantidad','costo_extra_tamano','costo_producto','instruccion_especial','nombre_producto','nombre_tamano',
    'total','id_tamano','id_producto','id_venta'];
}
