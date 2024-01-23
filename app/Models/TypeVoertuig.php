<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TypeVoertuig extends Model
{
    use HasFactory;

    public function instructeur(): BelongsTo
    {
        return $this->belongsTo(Instructeur::class);
    }
}
