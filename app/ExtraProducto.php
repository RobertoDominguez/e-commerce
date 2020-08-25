<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraProducto extends Model
{
    protected $table='extra_producto';
    protected $fillable=['eliminado','id_extra','id_producto'];
}
