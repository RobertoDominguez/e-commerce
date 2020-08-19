<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table='venta';
    protected $fillable=['comentario','total','id_cliente','id_metodo_pago','es_delivery','aceptado','rechazado','entregado',
    'created_at','updated_at','comentario_respuesta'];
}
