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
        // database/migrations/xxxx_create_announcements_table.php
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->string('badge_text');              // Ej: "📢 NOVEDAD DEL SISTEMA"
            $table->string('badge_class')->default('bg-success'); // Clases CSS o hex: "bg-warning text-dark"
            $table->string('title');                   // Título principal
            $table->text('description');             // Descripción corta
            $table->string('button_text')->nullable();  // Ej: "Ver Módulo" (Opcional)
            $table->string('button_url')->nullable();   // Ej: "/computers" o nombre de ruta (Opcional)
            $table->boolean('is_active')->default(true); // Activar/Desactivar sin borrar
            $table->integer('order')->default(0);      // Orden de aparición
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};
