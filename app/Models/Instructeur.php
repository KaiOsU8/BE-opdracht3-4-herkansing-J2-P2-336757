<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use App\Models\Voertuig;
use App\Models\VoertuigInstructeur;

class Instructeur extends Model
{
    use HasFactory;


    public function voertuigInstructeurs(): HasMany
    {
        return $this->hasMany(VoertuigInstructeur::class, 'InstructeurId', 'id');
    }

    public function voertuigen(): HasManyThrough
    {
        return $this->hasManyThrough(Voertuig::class, VoertuigInstructeur::class, 'InstructeurId', 'id', 'id', 'VoertuigId');
    }
}