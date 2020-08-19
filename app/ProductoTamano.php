<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoTamano extends Model
{
    protected $table='producto_tamano';
    protected $fillable=['precio_extra'];
}
