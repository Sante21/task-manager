<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TareaCliente extends Model
{
    /** @use HasFactory<\Database\Factories\TareaClienteFactory> */
    use HasFactory;

    // Definimos el modelo
    protected $table = 'tarea_clientes';
}
