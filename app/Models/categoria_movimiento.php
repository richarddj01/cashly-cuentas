<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categoria_movimiento extends Model
{
    /**
     * Get all of the Movimiento for the categoria_movimiento
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movimiento(): HasMany
    {
        return $this->hasMany(movimiento::class);
    }
}
