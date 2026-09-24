<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('formaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Ej: Análisis y Desarrollo de Software (ADSO)
            $table->string('codigo')->unique(); // Código del programa
            $table->text('descripcion')->nullable();
            $table->enum('estado', ['abierta', 'cerrada', 'proxima'])->default('abierta');

            // Relaciones lógicas
            $table->foreignId('area_id')->constrained('areas')->onDelete('cascade');
            $table->foreignId('training_center_id')->constrained('trainig_centers')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('formaciones');
    }
};
