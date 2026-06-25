<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('provincias', function (Blueprint $table) {
            $table->string('id')->primary();   // ← ID como string (ej: "02")
            $table->string('nombre');           // ← columna que necesitas
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('provincias');
    }
};