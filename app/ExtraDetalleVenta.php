<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraDetalleVenta extends Model
{
    protected $table='extra_detalle_venta';
    protected $fillable=['cantidad','nombre_extra','total','id_extra','id_detalle_venta'];
}
