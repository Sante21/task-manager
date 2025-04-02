<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsableTarea extends Model
{
    /** @use HasFactory<\Database\Factories\ResponsableTareaFactory> */
    use HasFactory;

    // Definimos el modelo
    protected $table = 'responsable_tarea';
}
