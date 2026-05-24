<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transferencia extends Model
{
    /**
     * Get the transferenciaRecibida that owns the transferencia
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cuentaOrigen(): BelongsTo
    {
        return $this->belongsTo(cuenta::class, 'cuenta_origen_id');
    }
    /**
     * Get the transferenciaEnviada that owns the transferencia
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cuentaDestino(): BelongsTo
    {
        return $this->belongsTo(cuenta::class, 'cuenta_destino_id');
    }
}
