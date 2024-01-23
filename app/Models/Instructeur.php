<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instructeur extends Model
{
    use HasFactory;

    public function voertuigInstructeur(): BelongsTo
    {
        return $this->belongsTo(VoertuigInstructeur::class);
    }

    public function typeVoertuig(): HasMany
    {
        return $this->hasMany(TypeVoertuig::class);
    }
}
