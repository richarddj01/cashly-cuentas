<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class movimiento extends Model
{
    /**
     * Get the user that owns the movimiento
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria_movimiento(): BelongsTo
    {
        return $this->belongsTo(categoria_movimientor::class);
    }

    /**
     * Get the cuenta that owns the movimiento
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cuenta(): BelongsTo
    {
        return $this->belongsTo(cuenta::class);
    }
}
