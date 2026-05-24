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
        Schema::create('transferencias', function (Blueprint $table) {
            $table->id();

            //Llaves foraneas
            $table->unsignedBigInteger('cuenta_origen_id');
            $table->unsignedBigInteger('cuenta_destino_id');
            $table->foreign('cuenta_origen_id')->references('id')->on('cuentas')->restrictOnDelete();
            $table->foreign('cuenta_destino_id')->references('id')->on('cuentas')->restrictOnDelete();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transferencias');
    }
};
