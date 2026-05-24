<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cuenta extends Model
{
    /**
     * Get all of the comments for the cuenta
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movimiento(): HasMany
    {
        return $this->hasMany(movimiento::class);
    }

    /**
     * Get all of the transferenciaEnviada for the cuenta
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transferenciaEnviada(): HasMany
    {
        return $this->hasMany(transferencia::class, 'cuenta_origen_id');
    }

    /**
     * Get all of the trasnferenciaRecibida for the cuenta
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trasnferenciaRecibida(): HasMany
    {
        return $this->hasMany(transferencia::class, 'cuenta_destino_id');
    }
}
