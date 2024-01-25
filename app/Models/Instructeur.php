<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use App\Models\Voertuig;
use App\Models\VoertuigInstructeur;
use Illuminate\Support\Facades\DB;
use App\Models\InstructeurVoertuigHistories; // Import the missing class

class Instructeur extends Model
{
    use HasFactory;

    const UPDATED_AT = 'DatumGewijzigd';
    const CREATED_AT = 'DatumAangemaakt';

    protected $fillable = [
        'IsActief',
    ];

    public function voertuigInstructeurs(): HasMany
    {
        return $this->hasMany(VoertuigInstructeur::class, 'InstructeurId', 'id');
    }

    public function voertuigen(): HasManyThrough
    {
        return $this->hasManyThrough(Voertuig::class, VoertuigInstructeur::class, 'InstructeurId', 'id', 'id', 'VoertuigId');
    }

    public function allVoertuigen()
    {
        return $this->hasManyThrough(
            Voertuig::class,
            InstructeurVoertuigHistories::class, // Add the missing class here
            'InstructeurId',
            'id',
            'id',
            'VoertuigId'
        );
    }

    public function wasVehicleReassignedDuringLeave($voertuigId)
    {
        // Get the current assignment
        $currentAssignment = $this->voertuigInstructeurs()->where('VoertuigId', $voertuigId)->first();
    
        if ($currentAssignment) {
            // Check the history table
            $historyRecord = DB::table('instructeur_voertuig_histories')
                ->where('VoertuigId', $voertuigId)
                ->where('InstructeurId', '!=', $this->id)
                ->first();
    
            return $historyRecord ? true : false;
        }
    
        return false;
    }
}