<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteTarea extends Model
{
    /** @use HasFactory<\Database\Factories\ClienteTareaFactory> */
    use HasFactory;

    // Definimos el modelo
    protected $table = 'cliente_tarea';
}
