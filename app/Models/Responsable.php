<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    /** @use HasFactory<\Database\Factories\ResponsableFactory> */
    use HasFactory;

    // Propiedades, en este caso, user_id hará referencia a la Id del User.
    protected $fillable = [
        'name',
        'cargo',
        'image',
        'user_id',
    ];

    /*
     * Relaciones
    */

    // Relación con user 1-1, por la id
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    // Relación con Tareas N-N, con tabla pivote
    public function tareas() {
        return $this->belongsToMany(Tarea::class);
    }
}
