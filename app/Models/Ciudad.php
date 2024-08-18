<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla
    protected $table = 'ciudades';

    // Si la tabla no tiene las columnas de timestamps, desactiva estas propiedades
    public $timestamps = true;
}
