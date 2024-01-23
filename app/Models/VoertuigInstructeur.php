<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
// use Awobaz\Compoships\Compoships;

class VoertuigInstructeur extends Model
{
    use HasFactory;

    public function voertuig(): HasMany
    {
        return $this->hasMany(Voertuig::class);
    }

    public function instructeur(): HasMany
    {
        return $this->hasMany(Instructeur::class);
    }
}
