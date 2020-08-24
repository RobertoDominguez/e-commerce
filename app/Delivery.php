<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $primary_key='id_venta';
    protected $table='delivery';
    protected $fillable=['id_venta','lat','long','ubicacion','costo_envio'];
}
