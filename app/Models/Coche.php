<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Coche extends Model
{
    use HasFactory;
    public function empleado(): BelongsTo
    {
        return $this->belongsTo(Empleado::class);
    }
}
