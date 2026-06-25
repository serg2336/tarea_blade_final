<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    // Clave primaria personalizada
    protected $primaryKey = 'id';
    public $incrementing = false;   // no es autoincremental
    protected $keyType = 'string';  // el ID viene como texto

    // Campos que se pueden asignar masivamente
    protected $fillable = ['id', 'nombre'];
}
