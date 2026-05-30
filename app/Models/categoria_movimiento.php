<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class categoria_movimiento extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'descripcion'
    ] ;
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
