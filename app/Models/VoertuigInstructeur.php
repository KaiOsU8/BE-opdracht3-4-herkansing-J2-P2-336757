<?php

namespace App\Models;

use App\Models\Voertuig; 
use App\Models\Instructeur; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo; 



class VoertuigInstructeur extends Model
{
    use HasFactory;

    const UPDATED_AT = 'DatumGewijzigd';
    const CREATED_AT = 'DatumAangemaakt';

    protected $fillable = ['InstructeurId'];

    public function voertuig(): BelongsTo
    {
        return $this->belongsTo(Voertuig::class, 'VoertuigId', 'id');
    }

    public function instructeur(): BelongsTo
    {
        return $this->belongsTo(Instructeur::class, 'InstructeurId', 'id');
    }
}
