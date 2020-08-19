<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamano extends Model
{
    protected $table='tamano';
    protected $fillable=['nombre','eliminado'];
}
