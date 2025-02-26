<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TareaResponsable extends Model
{
    /** @use HasFactory<\Database\Factories\TareaResponsableFactory> */
    use HasFactory;

    // Definimos el modelo
    protected $table = 'tarea_responsables';
}
