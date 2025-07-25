<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    /** @use HasFactory<\Database\Factories\TareaFactory> */
    use HasFactory;

    // Propiedades de las tareas
    protected $fillable = [
        'title',
        'description',
        'priority',
        'cliente_tarea',
        'responsable_tarea',
        'tag',
        'status',
        'limit_date'
    ];

    /*
     * Relaciones
    */

    // Relacion con Responsables N-N con tabla pivote
    public function responsables() {
        return $this->belongsToMany(Responsable::class);
    }
    
    // Relacion con Clientes N-N con tabla pivote
    public function clientes() {
        return $this->belongsToMany(Cliente::class);
    }
}
