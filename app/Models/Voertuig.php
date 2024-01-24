<?php

namespace App\Models;

use App\Models\VoertuigInstructeur; // Add this import statement
use App\Models\TypeVoertuig; // Add this import statement
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; 
use Illuminate\Database\Eloquent\Relations\HasOne;


class Voertuig extends Model
{
    use HasFactory;

    const UPDATED_AT = 'DatumGewijzigd';
    const CREATED_AT = 'DatumAangemaakt';

    protected $fillable = [
        'Kenteken',
        'Type',
        'Bouwjaar',
        'Brandstof',
        'TypeVoertuigId',
        'InstructeurId',
    ];

    public function voertuigInstructeur()
    {
        return $this->hasOne(VoertuigInstructeur::class, 'VoertuigId');
    }

    public function typeVoertuig() : BelongsTo
    {
        return $this->belongsTo(TypeVoertuig::class, 'TypeVoertuigId', 'id');
    }
}
