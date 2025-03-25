<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('priority', ['baja', 'media', 'alta'])->default('media');
            $table->enum('tag', ['web', 'redes', 'newsletter'])->default('redes');
            $table->enum('status', ['Sin empezar', 'Pausa', 'En progreso', 'Listo'])->default('Sin empezar');
            // $table->foreignId('client_id')->nullable()->constrained('clientes')->nullOnDelete();
            $table->date('limit_date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
