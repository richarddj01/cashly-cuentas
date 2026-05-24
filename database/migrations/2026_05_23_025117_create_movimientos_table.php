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
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cuenta_id')->constrained()->restrictOnDelete();
            $table->foreignId('categoria_movimiento_id')->constrained()->restrictOnDelete();
            $table->enum('tipo', ['ingreso','egreso']);
            $table->string('descripcion');
            $table->float('valor');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos');
    }
};
