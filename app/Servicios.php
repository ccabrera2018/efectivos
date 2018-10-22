<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    protected $fillable = ['id_servicios','nombre', 'resumen', 'created_at'];
}
