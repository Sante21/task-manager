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
        'tag',
        'status',
        'client_id',
        'limit_date'
    ];

    /*
     * Relaciones
    */

    // Relacion con Responsables N-N con tabla pivote
    public function responsables() {
        return $this->belongsToMany(Responsable::class, 'tarea_responsables');
    }
    
    // Relacion con Clientes N-N con tabla pivote
    public function clientes() {
        return $this->belongsToMany(Cliente::class, 'tarea_clientes');
    }
}
