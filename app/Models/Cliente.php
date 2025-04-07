<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /** @use HasFactory<\Database\Factories\ClienteFactory> */
    use HasFactory;

    // Propiedades de los clientes.
    protected $fillable = [
        'name',
        'email',
        'phone',
        'service',
        'image'
    ];

    // Relación con Tarea N-N, tienendo un modelo pivote
    public function tareas() {
        return $this->belongsToMany(Tarea::class);
    }
    
}
